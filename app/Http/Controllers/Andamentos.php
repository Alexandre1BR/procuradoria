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

    /**
     * @var AndamentosRepository
     */
    private $repository;

    /**
     * Andamentos constructor.
     * @param AndamentosRepository $repository
     */
    public function __construct(AndamentosRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param null $id
     * @return $this
     */
    public function create($id = null)
    {
        return view('andamentos.form', $this->getAndamentosData())
            ->with('id', $id)
            ->with(['andamento' => $this->repository->new()]);
    }

    /**
     * @param AndamentoRequest $request
     * @param AndamentosRepository $repository
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AndamentoRequest $request, AndamentosRepository $repository)
    {
        $repository->createFromRequest($request);

        $repository->checkforchanges($request);

        if (isset($request->redirect)) {
            return redirect()->route('processos.show', ['id' => $request->redirect])
                ->with($this->getSuccessMessage());
        } else {
            return redirect()->route('andamentos.index')
                ->with($this->getSuccessMessage());
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $andamento = Andamento::find($id);

        return view('andamentos.form')
            ->with('andamento', $andamento)
            ->with('formDisabled', true)
            ->with($this->getAndamentosData());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail(Request $request)
    {
        $andamento = Andamento::find($request->id);

        $processos = ModelProcesso::pluck('numero_judicial', 'id');

        $tipoPrazos = ModelTipoPrazo::pluck('nome', 'id');

        $tipoAndamentos = ModelTipoAndamento::pluck('nome', 'id');
        //dd($tipoAndamentos);

        $tipoEntradas = ModelTipoEntrada::pluck('nome', 'id');

        return view('andamentos.form', compact('andamento', 'processos', 'tipoAndamentos', 'tipoEntradas', 'tipoPrazos'));
    }

    /**
     * @param AndamentosRepository $andamentos
     * @param Request $request
     * @return $this
     */
    public function index(AndamentosRepository $andamentos, Request $request)
    {
        return view('andamentos.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with('andamentos', $andamentos->search($request));
    }

    /**
     * @return array
     */
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
