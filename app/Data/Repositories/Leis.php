<?php

namespace App\Data\Repositories;

use App\Data\Models\Lei as LeiModel;
use Illuminate\Http\Request;

/**
 * Class Leis
 * @package App\Data\Repositories
 */
class Leis extends Base
{
    /**
     * @var string
     */
    protected $model = LeiModel::class;

    /**
     * @param Request|null $request
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function search(Request $request = null)
    {
        return LeiModel::all();
    }
}
