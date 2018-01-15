<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoPrazo;
use Illuminate\Http\Request;

class TiposPrazos
{
    public function createFromRequest(Request $request)
    {
        return TipoPrazo::create($request->all());
    }
}
