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

    public function index(AcoesRepo $andamentos, Request $request)
    {
        return view('acoes.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with('andamentos', $andamentos->search($request));
    }
}
