<?php

namespace App\Http\Controllers;

use App\Data\Models\Andamento;
use App\Data\Models\Processo as ModelProcesso;
use App\Data\Models\TipoAndamento as ModelTipoAndamento;
use App\Data\Models\TipoEntrada as ModelTipoEntrada;
use App\Data\Models\TipoPrazo as  ModelTipoPrazo;
use App\Data\Repositories\Andamentos as AndamentosRepository;
use App\Http\Requests\Andamento as AndamentoRequest;
use Illuminate\Http\Request;

class Andamentos extends Controller
{
    public function create()
    {
        return view('andamentos.create', $this->getAndamentosData());
    }

    public function create_post(Request $request)
    {
        $processo_id_post = ($request->processo_id);

        return view('andamentos.create', $this->getAndamentosData(), compact('processo_id_post'));
    }

    public function store(AndamentoRequest $request, AndamentosRepository $repository)
    {
        $repository->createFromRequest($request);

        //return $this->index($repository,$request);
        return redirect()->route('andamentos.index');
    }

    public function show($id)
    {
        $andamento = Andamento::find($id);

        return view('andamentos.show')
            ->with('andamento', $andamento)
            ->with($this->getAndamentosData());
    }

    public function detail(Request $request)
    {
        $andamento = Andamento::find($request->id);

        $processos = ModelProcesso::pluck('numero_judicial', 'id');

        $tipoPrazos = ModelTipoPrazo::pluck('nome', 'id');

        $tipoAndamentos = ModelTipoAndamento::pluck('nome', 'id');
        //dd($tipoAndamentos);

        $tipoEntradas = ModelTipoEntrada::pluck('nome', 'id');

        return view('andamentos.show', compact('andamento', 'processos', 'tipoAndamentos', 'tipoEntradas', 'tipoPrazos'));
    }

    public function index(AndamentosRepository $andamentos, Request $request)
    {
        return view('andamentos.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with('andamentos', $andamentos->search($request));
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
