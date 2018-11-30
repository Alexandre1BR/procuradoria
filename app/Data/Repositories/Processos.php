<?php

namespace App\Data\Repositories;

use App\Data\Models\Acao;
use App\Data\Models\Andamento;
use App\Data\Models\Apenso;
use App\Data\Models\Juiz;
use App\Data\Models\Meio;
use App\Data\Models\Processo;
use App\Data\Models\ProcessoLei;
use App\Data\Models\Tag;
use App\Data\Models\TipoProcesso as ModelTipoProcesso;
use App\Data\Models\Tribunal;
use App\Data\Models\User as UserModel;
use App\Data\Repositories\Leis as LeiRepository;
use App\Data\Scope\Processo as ProcessoScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class Processos extends Base
{
    /**
     * @var string
     */
    protected $model = Processo::class;

    /**
     * Processos constructor.
     */
    public function __construct()
    {
        $this->tiposUsuariosRepository = app(TiposUsuarios::class);
    }

    /**
     * @var array
     */
    protected $dataTypes = [
        'numero_judicial' => 'string',
        'numero_alerj'    => 'string',
        'vara'            => 'string',
        //'origem_complemento' => 'string,
        'apensos_obs' => 'string',
        'autor'       => 'string',
        'reu'         => 'string',
        'objeto'      => 'string',
        'merito'      => 'string',
        'liminar'     => 'string',
        'recurso'     => 'string',
        //'tipo_meio'         => 'string',
        'data_distribuicao' => 'date',
        'observacao'        => 'string',
        'link'              => 'string',
        'site_alerj_link'   => 'string',
    ];

    /**
     * @return mixed
     */
    public function getAllIds()
    {
        return Processo::pluck('id');
    }

    /**
     * @param $tags
     */
    private function listTags($tags)
    {
        // dd($tags);
    }

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function search(Request $request)
    {
        return $this->searchFromRequest($request->get('pesquisa'));
    }

    /**
     * @param $request
     *
     * @return mixed
     */
    public function filter($request)
    {
        $query = $this->makeProcessoQuery(
            $request->get('processos_arquivados_incluidos'),
            $request->get('processos_arquivados_apenas')
        );

        if (!empty(($search = $request->get('search')))) {
            $query = $this->searchString($search, $query);
        }

        if (toBoolean($request->get('advancedFilter'))) {
            collect($this->filterToJson($request))->each(function (
                $search,
                $column
            ) use ($query) {
                if (!empty($search)) {
                    $this->addQueryByType($search, $column, $query);
                }
            });
        }

        return $this->transform($query->get());
    }

    /**
     * @param $search
     * @param $column
     * @param $query
     */
    public function addQueryByType($search, $column, $query)
    {
        switch (Processo::getDataTypeOf($column)) {
            case 'id':
                $query->where($column, '=', $search);
                break;
            case 'string':
                //                $query->where(DB::raw("lower({$column})"), 'like', "%{$search}%");
                $query->where($column, 'ilike', '%'.$search.'%');
                break;
            case 'link':
                //                $query->where(DB::raw("lower({$column})"), 'like', "%{$search}%");
                $query->where($column, 'ilike', '%'.$search.'%');
                break;
            case 'tags':
                $query->withAnyTags((array) $search);
                break;
            case 'date':
                $query->where($column, '=', $search);
                break;
        }
    }

    /**
     * @param null|string $search
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function searchString($search = null, $query = null)
    {
        $search = is_null($search)
            ? collect()
            : collect(explode(' ', $search))->map(function ($item) {
                return strtolower($item);
            });

        $columns = collect($this->dataTypes);

        $query = $query ?: $this->makeProcessoQuery();

        $search->each(function ($item) use ($columns, $query) {
            $columns->each(function ($type, $column) use ($query, $item) {
                if ($type === 'string') {
                    if ($column == 'numero_judicial') {
                        $item = only_numbers($item);
                    }
                    $query->orWhere($column, 'ilike', '%'.$item.'%');
                } else {
                    $ifdate = $this->toDate($item);
                    if ($ifdate != null) {
                        $query->orWhereDate($column, '=', $ifdate);
                    }
                }
            });

            $query->orWhereHas('tribunal', function ($query) use ($item) {
                $query->whereRaw("lower(nome) like '%{$item}%'");
            });

            $query->orWhereHas('juiz', function ($query) use ($item) {
                $query->whereRaw("lower(nome) like '%{$item}%'");
            });

            $query->orWhereHas('relator', function ($query) use ($item) {
                $query->whereRaw("lower(nome) like '%{$item}%'");
            });

            $query->orWhereHas('procurador', function ($query) use ($item) {
                $query->whereRaw("lower(name) like '%{$item}%'");
            });

            $query->orWhereHas('estagiario', function ($query) use ($item) {
                $query->whereRaw("lower(name) like '%{$item}%'");
            });

            $query->orWhereHas('assessor', function ($query) use ($item) {
                $query->whereRaw("lower(name) like '%{$item}%'");
            });

            $query->orWhereHas('acao', function ($query) use ($item) {
                $query->whereRaw("lower(nome) like '%{$item}%'");
            });
        });

        return $query->orderBy('updated_at', 'desc');
    }

    /**
     * @param $apensos
     *
     * @return mixed
     */
    public function getProcessosWithoutApensos($apensos)
    {
        $processos = Processo::orderBy('numero_judicial')->pluck(
            'numero_judicial',
            'id'
        );

        foreach ($apensos as $key => $apenso) {
            $processos->forget($apenso->apensado_id);

            $processos->forget($apenso->processo_id);
        }

        return $processos;
    }

    /**
     * @param null $id
     *
     * @return array
     */
    public function getProcessosData($id = null)
    {
        return Cache::remember('getProcessosData'.$id, 1, function () use (
            $id
        ) {
            $apensos = Apenso::where('processo_id', $id)
                ->orWhere('apensado_id', $id)
                ->get();

            $processos = $this->getProcessosWithoutApensos($apensos);

            $query = ProcessoLei::where('processo_id', $id)->get();
            $leis = [];
            foreach ($query as $q) {
                $leis[] = $q->lei;
            }

            $query = app(LeiRepository::class)
                ->allOrdenado()
                ->get()
                ->toArray();
            $allLeis = [];
            foreach ($query as $q) {
                $allLeis[$q['id']] = $q['lei_formatada'];
            }
            $allLeis = collect($allLeis);
            //dd($allLeis);

            return [
                'juizes'       => Juiz::orderBy('nome')->get(), //->pluck('nome', 'id'),
                'tribunais'    => Tribunal::orderBy('nome')->pluck('nome', 'id'),
                'procuradores' => UserModel::type('Procurador')
                    ->orderBy('name')
                    ->pluck('name', 'id'),
                'assessores' => UserModel::type('Assessor')
                    ->orderBy('name')
                    ->pluck('name', 'id'),
                'estagiarios' => UserModel::type('Estagiario')
                    ->orderBy('name')
                    ->pluck('name', 'id'),
                'meios'          => Meio::orderBy('nome')->pluck('nome', 'id'),
                'acoes'          => Acao::orderBy('nome')->pluck('nome', 'id'),
                'andamentos'     => Andamento::where('processo_id', $id)->get(),
                'apensos'        => $apensos,
                'processos'      => $processos,
                'leis'           => $leis,
                'allLeis'        => $allLeis,
                'tags'           => Tag::all(),
                'tiposProcessos' => ModelTipoProcesso::orderBy('nome')->get(),
            ];
        });
    }

    /**
     * @param $request
     *
     * @return mixed
     */
    protected function filterToJson($request)
    {
        if (is_array(($filter = $request->get('filter')))) {
            return $filter;
        }

        $result = json_decode($filter, true);

        return is_array($result) ? $result : [];
    }

    /**
     * @param bool $arquivados
     *
     * @return $this
     */
    public function makeProcessoQuery(
        $processos_arquivados_incluidos = false,
        $processos_arquivados_apenas = false
    ) {
        $query = new Processo();

        if (toBoolean($processos_arquivados_apenas)) {
            $query = (new Processo())
                ->withoutGlobalScope(ProcessoScope::class)
                ->whereNotNull('data_arquivamento');
        } elseif (toBoolean($processos_arquivados_incluidos)) {
            $query = (new Processo())->withoutGlobalScope(ProcessoScope::class);
        }

        $query = $query
            ->with(['acao', 'tribunal', 'procurador', 'assessor', 'estagiario'])
            ->orderBy('updated_at', 'desc');

        return $query;
    }

    /**
     * @param $processos
     *
     * @return mixed
     */
    protected function transform($processos)
    {
        return $processos
            ->map(function ($processo) {
                $processo['acao_nome'] = is_null($processo->acao)
                    ? 'N/C'
                    : $processo->acao->nome;

                $processo['acao_abreviacao'] = is_null($processo->acao)
                    ? 'N/C'
                    : $processo->acao->abreviacao;

                $processo['tribunal_nome'] = is_null($processo->tribunal)
                    ? 'N/C'
                    : $processo->tribunal->nome;

                $processo['tribunal_abreviacao'] = is_null($processo->tribunal)
                    ? 'N/C'
                    : $processo->tribunal->abreviacao;

                $processo['procurador_nome'] = is_null($processo->procurador)
                    ? 'N/C'
                    : $processo->procurador->name;

                $processo['assessor_nome'] = is_null($processo->assessor)
                    ? 'N/C'
                    : $processo->assessor->name;

                $processo['estagiario_nome'] = is_null($processo->estagiario)
                    ? 'N/C'
                    : $processo->estagiario->name;

                $processo['show_url'] = route('processos.show', [
                    'id' => $processo['id'],
                ]);

                $processo['tags'] = $this->listTags($processo['tags']);

                return $processo;
            })
            ->toArray();
    }
}
