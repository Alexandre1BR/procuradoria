<?php

namespace App\Http\Controllers;

use App\Data\Models\Acao;
use App\Http\Requests\Acao as AcaoRequest;

class Acoes extends Controller
{
    public function create()
    {
        return view('acoes.create');
    }

    public function store(AcaoRequest $request)
    {
        Acao::create($request->all());
    }
}
