<?php

namespace App\Data\Repositories;

use App\Data\Models\Revision;
use App\Data\Models\Revision as RevisionModel;
use Illuminate\Http\Request;

class Revisions extends Base
{
    protected $model = RevisionModel::class;

    public function search(Request $request)
    {
        return $this->searchFromRequest($request->get('pesquisa'));
    }

    public function searchFromRequest($search = null)
    {
        return Revision::orderBy('created_at', 'DESC')->paginate(25);
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
