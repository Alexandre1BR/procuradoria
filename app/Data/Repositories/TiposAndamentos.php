<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoAndamento as TipoAndamento;
use Illuminate\Http\Request;

class TiposAndamentos
{
    public function createFromRequest(Request $request)
    {
        return TipoAndamento::create($request->all());
    }
}
