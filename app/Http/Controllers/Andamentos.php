<?php

namespace App\Http\Controllers;

use App\Data\Models\Andamento;

use App\Data\Models\TipoAndamento as ModelTipoAndamento;
use App\Data\Models\TipoEntrada as ModelTipoEntrada;
use App\Data\Models\TipoPrazo as  ModelTipoPrazo;
use App\Data\Repositories\Andamentos as AndamentosRepository;
use App\Http\Requests\Andamento as AndamentoRequest;

class Andamentos extends Controller
{
    public function create()
    {
        $processos = ModelProcesso::pluck('numero_judicial', 'id');

        $tipoPrazos = ModelTipoPrazo::pluck('nome', 'id');

        $tipoAndamentos = ModelTipoAndamento::pluck('nome', 'id');

        $tipoEntradas = ModelTipoEntrada::pluck('nome', 'id');

        return view('andamentos.create', compact('processos', 'tipoAndamentos', 'tipoEntradas', 'tipoPrazos'));
    }

    public function store(AndamentoRequest $request, AndamentosRepository $repository)
    {
        $repository->createFromRequest($request);

        return $this->create();
    }

    public function detail(AndamentoRequest $request)
    {
        dd($andamento = Andamento::find($request->id));

        return view('andamentos.detail', compact('andamento'));
    }
}
