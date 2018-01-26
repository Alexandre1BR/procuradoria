<?php

namespace App\Data\Repositories;

use App\Data\Models\Processo;
use App\Http\Requests\Processo as ProcessoRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Processos extends Base
{
    protected $model = Processo::class;

    private function isDate($item)
    {
        try {
            Carbon::createFromFormat('d/m/Y', $item);
        } catch (\Exception $exception) {
            return false;
        }

        return true;
    }

    public function search(ProcessoRequest $request)
    {
        return $this->searchFromRequest($request->get('pesquisa'));
    }

    /**
     * @param null|string $search
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function searchFromRequest($search = null)
    {
        $search = is_null($search)
            ? collect()
            : collect(explode(' ', $search))->map(function ($item) {
                return strtolower($item);
            });

        $columns = collect([
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
        ]);

        $query = Processo::query();

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
        });

//        \DB::listen(function($query) { dump($query->sql); dump($query->bindings); });

        return $query->orderBy('updated_at', 'desc')->get();
    }
}
