<?php

namespace App\Http\Controllers;

use App\Data\Models\Acao;
use App\Data\Repositories\Acoes as AcoesRepository;
use App\Http\Requests\Acao as AcaoRequest;
use Illuminate\Http\Request;

class Acoes extends Controller
{
    /**
     * @var AcoesRepository
     */
    private $repository;

    /**
     * Acoes constructor.
     * @param AcoesRepository $repository
     */
    public function __construct(AcoesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return $this
     */
    public function create()
    {
        return view('acoes.form')
            ->with(['acao' => $this->repository->new()]);
    }

    /**
     * @param AcaoRequest $request
     * @param AcoesRepository $repository
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AcaoRequest $request, AcoesRepository $repository)
    {
        $repository->createFromRequest($request);

        return redirect()->route('acoes.index')
            ->with($this->getSuccessMessage());
    }

    /**
     * @param AcoesRepository $acoes
     * @param Request $request
     * @return $this|\Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(AcoesRepository $acoes, Request $request)
    {
        return $request->expectsJson()
            ? $acoes->search($request)
            : view('acoes.index')
                ->with('pesquisa', $request->get('pesquisa'))
                ->with('acoes', $acoes->search($request));
    }

    /**
     * @param $id
     * @return $this
     */
    public function show($id)
    {
        return view('acoes.form')
            ->with('formDisabled', true)
            ->with(['acao' => Acao::find($id)]);
    }
}
