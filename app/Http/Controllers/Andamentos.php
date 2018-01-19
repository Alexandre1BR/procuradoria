<?php

namespace App\Http\Controllers;

use App\Data\Models\Processo as ModelProcesso;
use App\Data\Models\TipoAndamento as ModelTipoAndamento;
use App\Data\Models\TipoEntrada as ModelTipoEntrada;
use App\Data\Models\TipoPrazo as  ModelTipoPrazo;
use App\Data\Repositories\Andamentos as AndamentosRepository;
use App\Http\Requests\Andamento as AndamentoRequest;

class Andamentos extends Controller
{
    public function create()
    {
        return view('andamentos.create', $this->getAndamentosData());
    }

    public function store(AndamentoRequest $request, AndamentosRepository $repository)
    {
        $repository->createFromRequest($request);

        return $this->create();
    }

    public function getAndamentosData(): array
    {
        return [
            'processos'      => ModelProcesso::orderBy('numero_judicial')->pluck('numero_judicial', 'id'),
            'tipoPrazos'     => ModelTipoPrazo::orderBy('nome')->pluck('nome', 'id'),
            'tipoAndamentos' => ModelTipoAndamento::orderBy('nome')->pluck('nome', 'id'),
            'tipoEntradas'   => ModelTipoEntrada::orderBy('nome')->pluck('nome', 'id'),
        ];
    }
}
