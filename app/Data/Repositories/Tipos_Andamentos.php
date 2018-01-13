<?php

namespace App\Data\Repositories;

use App\Data\Models\Tipo_Andamento as TipoAndamento;
use Illuminate\Http\Request;

class Tipos_Andamentos
{
    public function createFromRequest(Request $request)
    {
        return TipoAndamento::create($request->all());
    }
}
