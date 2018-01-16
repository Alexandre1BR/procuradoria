<?php

namespace App\Data\Repositories;

use App\Data\Models\Tipo_Juiz as TipoJuiz;
use Illuminate\Http\Request;

class Tipos_Juizes
{
    public function createFromRequest(Request $request)
    {
        return TipoJuiz::create($request->all());
    }
}
