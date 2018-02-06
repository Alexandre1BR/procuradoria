<?php

namespace App\Data\Repositories;

use App\Data\Models\Acao;
use App\Data\Models\Andamento;
use App\Data\Models\Apenso;
use App\Data\Models\Juiz;
use App\Data\Models\Lei;
use App\Data\Models\Meio;
use App\Data\Models\Processo;
use App\Data\Models\Tag;
use App\Data\Models\Tribunal;
use App\Data\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Processos extends Base
{
    protected $model = Processo::class;

    protected $dataTypes = [
        'numero_judicial' => 'string',
        'numero_alerj'    => 'string',
        'vara'            => 'string',
        //'origem_complemento' => 'string,
        'apensos_obs'       => 'string',
        'autor'             => 'string',
        'reu'               => 'string',
        'objeto'            => 'string',
        'merito'            => 'string',
        'liminar'           => 'string',
        'recurso'           => 'string',
        //'tipo_meio'         => 'string',
        'data_distribuicao' => 'date',
        'observacao'        => 'string',
    ];

    protected function isDate($item)
    {
        try {
            Carbon::createFromFormat('d/m/Y', $item);
        } catch (\Exception $exception) {
            return false;
        }

        return true;
    }

    public function search(Request $request)
    {
        return $this->searchString($request->get('search'));
    }

    public function filter($request)
    {
        info($request->get('advancedFilter'));

        $query = $this->makeProcessoQuery();

        if (!empty($search = $request->get('search'))) {
            $query = $this->searchString($search, $query);
        }

        if ($request->get('advancedFilter')) {
            collect($request->get('filter'))->each(function ($search, $column) use ($query) {
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
    public function addQueryByType($search, $column, $query): void
    {
        switch (Processo::getDataTypeOf($column)) {
            case 'id':
                $query->where($column, '=', $search);
                break;
            case 'string':
                $query->where(DB::raw("lower({$column})"), 'like', "%{$search}%");
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
                    $query->orWhere(DB::raw("lower({$column})"), 'like', '%'.$item.'%');
                } else {
                    if ($this->isDate($item)) {
                        $query->orWhere($column, '=', $item);
                    }
                }
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
            $query->orWhereHas('tribunal', function ($query) use ($item) {
                $query->whereRaw("lower(nome) like '%{$item}%'");
            });
        });

//        \DB::listen(function($query) { dump($query->sql); dump($query->bindings); });

        return $query;
    }

    /**
     * @param null $id
     *
     * @return array
     */
    public function getProcessosData($id = null)
    {
        $apensos = Apenso::where('processo_id', $id)->orWhere('apensado_id', $id)->get();
        //dump($apensos->values());
        $processos = Processo::orderBy('numero_judicial')->pluck('numero_judicial', 'id');

//        \DB::listen(function($query) { dump($query->sql); dump($query->bindings); });
        foreach ($apensos as $key  => $apenso) {
            $processos->forget($apenso->apensado_id);
            $processos->forget($apenso->processo_id);
        }

        return [
            'juizes'     => Juiz::orderBy('nome')->get(), //->pluck('nome', 'id'),
            'tribunais'  => Tribunal::orderBy('nome')->pluck('nome', 'id'),
            'usuarios'   => User::orderBy('name')->pluck('name', 'id'),
            'meios'      => Meio::orderBy('nome')->pluck('nome', 'id'),
            'acoes'      => Acao::orderBy('nome')->pluck('nome', 'id'),
            'andamentos' => Andamento::where('processo_id', $id)->get(),
            'apensos'    => $apensos,
            'processos'  => $processos,
            'leis'       => Lei::where('processo_id', $id)->get(),
            'tags'       => Tag::all(),
        ];
    }

    protected function transform($processos)
    {
        return $processos->map(function ($processo) {
            $processo['acao_nome'] = is_null($processo->acao) ? 'N/C' : $processo->acao->nome;

            $processo['tribunal_nome'] = is_null($processo->tribunal) ? 'N/C' : $processo->tribunal->nome;

            $processo['procurador_nome'] = is_null($processo->procurador) ? 'N/C' : $processo->procurador->name;

            $processo['assessor_nome'] = is_null($processo->assessor) ? 'N/C' : $processo->assessor->name;

            $processo['estagiario_nome'] = is_null($processo->estagiario) ? 'N/C' : $processo->estagiario->name;

            $processo['estagiario_nome'] = route('processos.show', ['id' => $processo['id']]);

            return $processo;
        })->toArray();
    }

    public function makeProcessoQuery()
    {
        return (new Processo())
                ->with(['acao', 'tribunal', 'procurador', 'assessor', 'estagiario'])
                ->orderBy('updated_at', 'desc');
    }
}
