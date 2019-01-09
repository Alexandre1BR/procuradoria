<?php

namespace App\Data\Repositories;

use App\Data\Models\Andamento;
use App\Data\Models\Andamento as AndamentoModel;
use App\Data\Models\Processo;
use App\Data\Models\TipoAndamento;
use App\Data\Models\TipoEntrada;
use App\Http\Requests\Processo as ProcessoRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Andamentos extends Base
{
    /**
     * @var string
     */
    protected $model = AndamentoModel::class;

    /**
     * @var array
     */
    protected $dataTypes = [
        'data_prazo' => 'date',
        'data_entrega' => 'date',
        'observacoes' => 'string',
    ];

    /**
     * @param $andamento
     *
     * @return string
     */
    protected function makeFeedTitle($andamento)
    {
        return "\n" .
            'PRAZO - ' .
            $this->cleanString($andamento->tipoPrazo->nome) .
            "\n" .
            'judicial: ' .
            $this->cleanString($andamento->processo->numero_judicial) .
            "\n" .
            'alerj: ' .
            $this->cleanString($andamento->processo->numero_alerj) .
            "\n" .
            'autor: ' .
            $this->cleanString($andamento->processo->autor) .
            "\n" .
            'réu: ' .
            $this->cleanString($andamento->processo->reu) .
            "\n";
    }

    /**
     * @param $andamento
     *
     * @return string
     */
    protected function makeFeedDescription($andamento)
    {
        return 'njud:' . $andamento->processo->numero_judicial . '<br>nalerj: ' . $andamento->processo->numero_alerj;
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function search(Request $request)
    {
        return $this->searchFromRequest($request->get('pesquisa'));
    }

    /**
     * @param ProcessoRequest $request
     * @param Processo        $p
     */
    public function createFromProcessos(ProcessoRequest $request, Processo $p)
    {
        $tipoAndamento = TipoAndamento::where('nome', 'Recebimento')
            ->get()
            ->first();
        $model = new AndamentoModel();

        $tipoEntrada = TipoEntrada::where('nome', 'Automatico')
            ->get()
            ->first();

        if (is_null($request->input('id'))) {
            $model->setAttribute('processo_id', $p->id);
            $model->setAttribute('tipo_andamento_id', $tipoAndamento->id);
            $model->setAttribute('tipo_entrada_id', $tipoEntrada->id);
            $model->setAttribute('data_andamento', $p->data_recebimento);
            $model->save();

            /*
             *  It means that the value of data_recebimento
             *  has changed and need to be changed in Andamento
             *
             */
        } elseif ($request->old('data_recebimento') != $request->input('data_recebimento')) {
            $model =
                AndamentoModel::where('processo_id', $p->id)
                    ->where('tipo_andamento_id', $tipoAndamento->id)
                    ->get()
                    ->first() ?? new AndamentoModel();

            $model->processo_id = $p->id;
            $model->tipo_andamento_id = $tipoAndamento->id;
            $model->data_andamento = $p->data_recebimento;
            $model->tipo_entrada_id = $model->tipo_entrada_id ?? $tipoEntrada->id;

            $model->save();
        }
    }

    /**
     * @param Request $request
     */
    public function checkforchanges(Request $request)
    {
        $tipoAndamento = TipoAndamento::where('nome', 'Recebimento')
            ->get()
            ->first();

        if ($request->input('tipo_andamento_id') == $tipoAndamento->id) {
            if ($request->old('data_andamento') != $request->input('data_andamento')) {
                $processo = Processo::where('id', $request->input('processo_id'))
                    ->get()
                    ->first();

                $processo->setAttribute('data_recebimento', $request->data_andamento);
                $processo->save();
            }
        }
    }

    /**
     * @param null|string $search
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function searchFromRequest($search = null, $query = null)
    {
        $search = is_null($search)
            ? collect()
            : collect(explode(' ', $search))->map(function ($item) {
                return strtolower($item);
            });

        $columns = collect($this->dataTypes);

        $query = $query ?: $this->makeAndamentoQuery();

        $search->each(function ($item) use ($columns, $query) {
            $columns->each(function ($type, $column) use ($query, $item) {
                if ($type === 'string') {
                    $query->orWhere($column, 'ilike', '%' . $item . '%');
                } else {
                    $ifdate = $this->toDate($item);
                    if ($ifdate != null) {
                        $query->orWhereDate($column, '=', $ifdate);
                    }
                }
            });

            $query->orWhereHas('processo', function ($query) use ($item) {
                $query->whereRaw("lower(numero_judicial) like '%{$item}%'");
            });

            $query->orWhereHas('tipoAndamento', function ($query) use ($item) {
                $query->whereRaw("lower(nome) like '%{$item}%'");
            });

            $query->orWhereHas('tipoEntrada', function ($query) use ($item) {
                $query->whereRaw("lower(nome) like '%{$item}%'");
            });

            $query->orWhereHas('tipoPrazo', function ($query) use ($item) {
                $query->whereRaw("lower(nome) like '%{$item}%'");
            });
        });

        return $query->get();
    }

    /**
     * @param $item
     *
     * @return string|void
     */
    protected function toDate($item)
    {
        try {
            $item = Carbon::createFromFormat('d/m/Y', $item)->format('Y-m-d');
        } catch (\Exception $exception) {
            report($exception);

            return;
        }

        return $item;
    }

    /**
     * @return mixed
     */
    public function feedForFullcalendar()
    {
        $andamentosComPrazo = AndamentoModel::whereNotNull('data_prazo')
            ->whereNotNull('tipo_prazo_id')
            ->get();

        return $andamentosComPrazo->map(function ($andamento) {
            return [
                'id' => $andamento->id,
                'title' => $this->makeFeedTitle($andamento),
                'start' => $andamento->data_prazo->toIso8601String(),
                'end' => $andamento->data_prazo->addHour()->toIso8601String(),
                'description' => $this->makeFeedDescription($andamento),
                'url' => route('processos.show', ['id' => $andamento->processo->id]),
            ];
        });
    }

    /**
     * @return $this
     */
    public function makeAndamentoQuery()
    {
        return (new AndamentoModel())
            ->with(['tipoAndamento', 'tipoEntrada', 'tipoPrazo'])
            ->orderBy('updated_at', 'desc');
    }

    /**
     * @param $request
     *
     * @return mixed
     */
    public function filter($request)
    {
        $query = $this->makeAndamentoQuery();

        if (!empty(($search = $request->get('search')))) {
            $query = $this->searchString($search, $query);
        }

        //        if ($request->get('advancedFilter')) {
        //            collect($this->filterToJson($request))->each(function ($search, $column) use ($query) {
        //                if (!empty($search)) {
        //                    $this->addQueryByType($search, $column, $query);
        //                }
        //            });
        //        }

        return $this->transform($query->get());
    }
}
