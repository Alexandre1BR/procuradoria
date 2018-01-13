<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoUsuario;
use Illuminate\Http\Request;

class TiposUsuarios
{
    public function createFromRequest(Request $request)
    {
        return TipoUsuario::create($request->all());
    }
}
