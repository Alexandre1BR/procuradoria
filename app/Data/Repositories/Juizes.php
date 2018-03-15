<?php

namespace App\Data\Repositories;

use App\Data\Models\Juiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Juizes extends Base
{
    /**
     * @var string
     */
    protected $model = Juiz::class;

    /**
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
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
                $query->orWhereHas('tipoJuiz', function ($query) use ($item) {
                    $query->whereRaw("lower(nome) like '%{$item}%'");
                });

                $query->orWhereHas('lotacao', function ($query) use ($item) {
                    $query->whereRaw("lower(nome) like '%{$item}%'");
                });
            });
        });

        return $this->makeResultForSelect($query->orderBy('nome')->get());
    }
}
