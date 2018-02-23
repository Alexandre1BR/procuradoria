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

        return $this->makeResultForSelect($query->orderBy('nome')->get());
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

    public function count()
    {
        // TODO: Implement count() method.
    }
}
