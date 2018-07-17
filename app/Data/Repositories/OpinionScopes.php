<?php

namespace App\Data\Repositories;

use App\Data\Models\OpinionScope as OpinionScopeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OpinionScopes extends Base
{
    public function attributesShowing()
    {
        $array = [];

        $array[] = (object) ['name' => 'name', 'showName' => 'Nome', 'columnSize' => '100%'];

        return $array;
    }

    public function formAttributes()
    {
        $array = [];
        $array[] = (object) ['name' => 'name', 'showName' => 'Nome', 'type' => 'string'];

        return $array;
    }

    public $editAttribute = 'name';

    /**
     * @var string
     */
    protected $model = OpinionScopeModel::class;

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

        $columns = collect(['name' => 'string']);

        $query = OpinionScopeModel::query();

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

        return $this->makeResultForSelect($query->orderBy('name')->get());
    }
}
