<?php

namespace App\Data\Repositories;

use App\Data\Models\Andamento as AndamentoModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Andamentos extends Base
{
    protected $model = AndamentoModel::class;

    protected $dataTypes = [
        'data_prazo'   => 'date',
        'data_entrega' => 'date',
        'observacoes'  => 'string',
    ];

    protected function makeFeedTitle($andamento)
    {
        return "\n".
            'PRAZO - '.$this->cleanString($andamento->tipoPrazo->nome)."\n".
            'judicial: '.$this->cleanString($andamento->processo->numero_judicial)."\n".
            'alerj: '.$this->cleanString($andamento->processo->numero_alerj)."\n".
            'autor: '.$this->cleanString($andamento->processo->autor)."\n".
            'réu: '.$this->cleanString($andamento->processo->reu)."\n";
    }

    protected function makeFeedDescription($andamento)
    {
        return 'njud:'.$andamento->processo->numero_judicial.'<br>nalerj: '.$andamento->processo->numero_alerj;
    }

    public function search(Request $request)
    {
        return $this->searchFromRequest($request->get('pesquisa'));
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
                    $query->orWhere($column, 'ilike', '%'.$item.'%');
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

    protected function toDate($item)
    {
        try {
            $item = Carbon::createFromFormat('d/m/Y', $item)->format('Y-m-d');
        } catch (\Exception $exception) {
            return;
        }
        return $item;
    }

    public function feedForFullcalendar()
    {
        return $this->all()->map(function ($andamento) {
            return [
                'id'          => $andamento->id,
                'title'       => $this->makeFeedTitle($andamento),
                'start'       => $andamento->data_prazo->toIso8601String(),
                'end'         => $andamento->data_prazo->addHour()->toIso8601String(),
                'description' => $this->makeFeedDescription($andamento),
                'url'         => route('processos.show', ['id' => $andamento->processo->id]),
            ];
        });
    }

    public function makeAndamentoQuery()
    {
        return (new AndamentoModel())
            ->with(['tipoAndamento', 'tipoEntrada', 'tipoPrazo'])
            ->orderBy('updated_at', 'desc');
    }
}
