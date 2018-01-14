<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Andamentos as AndamentosRepository;
use App\Http\Requests\Andamento as AndamentoRequest;

use App\Data\Models\Processo as ModelProcesso;
use App\Data\Models\TipoPrazo as  ModelTipoPrazo;
use App\Data\Models\Tipo_Andamento as ModelTipoAndamento;
use App\Data\Models\Tipo_Entrada as ModelTipoEntrada;


class Andamentos extends Controller
{
    public function create()
    {

        /*
         * $tiposjuizes = ModelTipo_Juiz::pluck('nome', 'id');
        $tiposjuizes = $tiposjuizes->sort();

        //dd($tiposjuizes);

        $tribunais = ModelTribunal::pluck('nome', 'id');
        $tribunais = $tribunais->sort();
        //dd($items);
         */

        $processos = ModelProcesso::pluck('numero_judicial','id');

        $tipoPrazos = ModelTipoPrazo::pluck('nome','id');

        $tipoAndamentos = ModelTipoAndamento::pluck('nome','id');

        $tipoEntradas = ModelTipoEntrada::pluck('nome','id');
        //dd($tipoPrazos);

        return view('andamentos.create', compact('processos', 'tipoAndamentos','tipoEntradas', 'tipoPrazos'));
    }

    public function store(AndamentoRequest $request, AndamentosRepository $repository)
    {
        $repository->createFromRequest($request);

        return $this->create();
    }
}
