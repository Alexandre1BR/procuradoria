<?php

namespace App\Http\Controllers;

use App\Data\Models\Acao;
use App\Data\Repositories\Acoes as AcoesRepository;
use App\Http\Requests\Acao as AcaoRequest;
use Illuminate\Http\Request;

class Acoes extends Controller
{
    public function create()
    {
        return view('acoes.create');
    }

    public function store(AcaoRequest $request, AcoesRepository $repository)
    {
        $repository->createFromRequest($request);

        return redirect()->route('acoes.index');
    }

    public function index(AcoesRepository $acoes, Request $request)
    {
        return view('acoes.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with('acoes', $acoes->search($request));
    }

    public function detail(AcaoRequest $request)
    {
        $acao = Acao::find($request->id);

        return view('acoes.detail')->with(['acao'=>$acao]);
    }
}
