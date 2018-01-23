<?php

namespace App\Data\Repositories;

use App\Data\Models\Andamento as AndamentoModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Andamentos extends Base
{

    protected $model = AndamentoModel::class;

    public function search(Request $request)
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
//            'numero_judicial' => 'string',
//            'numero_alerj'    => 'string',
//            'vara'            => 'string',
//            //'origem_complemento' => 'string,
//            'apensos_obs'       => 'string',
//            'autor'             => 'string',
//            'reu'               => 'string',
//            'objeto'            => 'string',
//            'merito'            => 'string',
//            'liminar'           => 'string',
//            'recurso'           => 'string',
            //'tipo_meio'         => 'string',
              'data_prazo'   => 'date',
              'data_entrega' => 'date',
              'observacoes'  => 'string',
        ]);

        $query = AndamentoModel::query();

        $search->each(function ($item) use ($columns, $query) {
            $columns->each(function ($type, $column) use ($query, $item) {
                if ($type === 'string') {
                    $query->orWhere(DB::raw("lower({$column})"), 'like', '%'.$item.'%');
                } else {
                    if ($this->isDate($item)) {
                        $query->orWhere($column, '=', $item);
                    }
                }
            });
        });

//        \DB::listen(function($query) { dump($query->sql); dump($query->bindings); });

        return $query->get();
    }

    private function isDate($item)
    {
        try {
            Carbon::createFromFormat('d/m/Y', $item);
        } catch (\Exception $exception) {
            return false;
        }

        return true;
    }
}
