<?php

namespace App\Data\Repositories;

use App\Data\Models\Lei as LeiModel;
use Illuminate\Http\Request;

class Leis extends Base
{
    protected $model = LeiModel::class;

    public function search(Request $request = null)
    {
        return LeiModel::all();
    }
}
