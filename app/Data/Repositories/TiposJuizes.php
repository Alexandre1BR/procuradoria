<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoJuiz as TipoJuiz;
use Illuminate\Http\Request;

class TiposJuizes
{
    public function createFromRequest(Request $request)
    {
        return TipoJuiz::create($request->all());
    }
}
