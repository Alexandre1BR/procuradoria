<?php

namespace App\Http\Controllers;

use App\Data\Models\Processo;
use App\Data\Models\Processo as ProcessoModel;
use App\Data\Repositories\Andamentos as AndamentosRepository;
use App\Data\Repositories\Apensos as ApensosRepository;
use App\Data\Repositories\Processos as ProcessosRepository;
use App\Data\Scope\Processo as ProcessoScope;
use App\Http\Requests\Apenso as ApensoRequest;
use App\Http\Requests\Processo as ProcessoRequest;

class Processos extends Controller
{
    /**
     * @var ProcessosRepository
     */
    private $repository;

    /**
     * Processos constructor.
     * @param ProcessosRepository $repository
     */
    public function __construct(ProcessosRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return $this
     */
    public function create()
    {
        return view('processos.form')
            ->with($this->repository->getProcessosData())
            ->with(['processo' => $this->repository->new()]);
    }

    /**
     * @param ProcessoRequest $request
     * @param ProcessosRepository $repository
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProcessoRequest $request, ProcessosRepository $repository)
    {
        $p = $repository->createFromRequest($request);

        $a = new AndamentosRepository();
        $a->createFromProcessos($request, $p);

        return redirect()
                ->route('home.index')
                ->with($this->getSuccessMessage());
    }

    /**
     * @param ApensoRequest $request
     * @param ApensosRepository $repository
     * @return \Illuminate\Http\RedirectResponse
     */
    public function apensar(ApensoRequest $request, ApensosRepository $repository)
    {
        $repository->createFromRequest($request);

        return redirect()
          ->route('processos.show', $request->processo_id)
          ->with('processo', ProcessoModel::find($request->processo_id))
          ->with('formDisabled', true)
          ->with($this->repository->getProcessosData($request->processo_id))
          ->with($this->getSuccessMessage());
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return view('processos.form')
            ->with('processo', ProcessoModel::withoutGlobalScope(ProcessoScope::class)->find($id))
            ->with('formDisabled', true)
            ->with($this->repository->getProcessosData($id));
    }
}
