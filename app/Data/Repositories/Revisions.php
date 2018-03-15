<?php

namespace App\Data\Repositories;

use App\Data\Models\Revision;
use App\Data\Models\Revision as RevisionModel;
use Illuminate\Http\Request;

class Revisions extends Base
{
    /**
     * @var string
     */
    protected $model = RevisionModel::class;

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function search(Request $request)
    {
        return $this->searchFromRequest($request->get('pesquisa'));
    }

    /**
     * @param null $search
     *
     * @return mixed
     */
    public function searchFromRequest($search = null)
    {
        return Revision::orderBy('created_at', 'DESC')->paginate(25);
    }

    /**
     * @param PackageInterface $package
     */
    public function hasPackage(PackageInterface $package)
    {
        // TODO: Implement hasPackage() method.
    }

    /**
     * @param $name
     * @param $constraint
     */
    public function findPackage($name, $constraint)
    {
        // TODO: Implement findPackage() method.
    }

    /**
     * @param $name
     * @param null $constraint
     */
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
