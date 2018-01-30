<?php

namespace App\Http\Controllers;

use App\Data\Models\Processo;
use App\Http\Requests\Apenso as ApensoRequest;
use App\Http\Requests\Processo as ProcessoRequest;
use App\Data\Repositories\Apensos as ApensosRepository;
use App\Data\Repositories\Processos as ProcessosRepository;

class Processos extends Controller
{
    /**
     * @var ProcessosRepository
     */
    private $repository;

    public function __construct(ProcessosRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create()
    {
        return view('processos.form')
            ->with($this->repository->getProcessosData())
            ->with(['processo' => $this->repository->new()]);
    }

    public function store(ProcessoRequest $request, ProcessosRepository $repository)
    {
        $repository->createFromRequest($request);

        return redirect()
                ->route('home.index')
                ->with($this->getSuccessMessage());
    }

    public function apensar(ApensoRequest $request, ApensosRepository $repository)
    {
        $repository->createFromRequest($request);
        //dd($request->processo_id);
        return view('processos.form')
        ->with('processo', Processo::find($request->processo_id))
        ->with('formDisabled', true)
        ->with($this->getProcessosData($request->processo_id))
        ->with($this->getSuccessMessage());
    }

    public function show($id)
    {
        return view('processos.form')
            ->with('processo', Processo::find($id))
            ->with('formDisabled', true)
            ->with($this->repository->getProcessosData($id));
    }
}
