<?php

namespace App\Data\Repositories;

use DB;
use App\Data\Models\SearchTerm;

class SearchTerms extends Base
{
    /**
     * @var string
     */
    protected $model = SearchTerm::class;

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

        $columns = collect(['text' => 'string']);

        $query = SearchTerm::query();

        $search->each(function ($item) use ($columns, $query) {
            $columns->each(function ($type, $column) use ($query, $item) {
                if ($type === 'string') {
                    $query->orWhere(
                        DB::raw("lower({$column})"),
                        'like',
                        '%' . $item . '%'
                    );
                }
            });
        });

        return $this->makeResultForSelect($query->orderBy('text')->get());
    }
}
