<?php

namespace App\Data\Repositories;

use App\Data\Models\Tipo_Entrada as TipoEntrada;
use Illuminate\Http\Request;

class Tipos_Entradas
{
    public function createFromRequest(Request $request)
    {
        return TipoEntrada::create($request->all());
    }
}
