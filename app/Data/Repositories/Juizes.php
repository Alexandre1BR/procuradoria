<?php

namespace App\Data\Repositories;

use App\Data\Models\Juiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Juizes
{
    /**
     * @param $request
     *
     * @return void
     */
    public function createFromRequest($request)
    {
        Juiz::create($request->all());

        $request->session()->flash('status', 'Dado salvo com sucesso!');
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
    public function searchFromRequest($search = null)
    {
        $search = is_null($search)
                ? collect()
                : collect(explode(' ', $search))->map(function ($item) {
                    return strtolower($item);
                });

        $columns = collect([
                'nome' => 'string',
        ]);

        $query = Juiz::query();

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
}
