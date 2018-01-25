<?php

namespace App\Data\Repositories;

use App\Data\Models\Tribunal;
use App\Data\Models\Tribunal as TribunalModel;
use Composer\Package\PackageInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tribunais extends Base
{
    protected $model = TribunalModel::class;

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

        $query = Tribunal::query();

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

        return $query->orderBy('updated_at', 'desc')->get();
    }

    public function hasPackage(PackageInterface $package)
    {
        // TODO: Implement hasPackage() method.
    }

    public function findPackage($name, $constraint)
    {
        // TODO: Implement findPackage() method.
    }

    public function findPackages($name, $constraint = null)
    {
        // TODO: Implement findPackages() method.
    }

    public function getPackages()
    {
        // TODO: Implement getPackages() method.
    }

    /**
     * Count elements of an object.
     *
     * @link http://php.net/manual/en/countable.count.php
     *
     * @return int The custom count as an integer.
     *             </p>
     *             <p>
     *             The return value is cast to an integer.
     *
     * @since 5.1.0
     */
    public function count()
    {
        // TODO: Implement count() method.
    }
}
