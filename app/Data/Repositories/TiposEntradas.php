<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoEntrada as TipoEntrada;
use Illuminate\Http\Request;

class TiposEntradas
{
    public function createFromRequest(Request $request)
    {
        return TipoEntrada::create($request->all());
    }
}
