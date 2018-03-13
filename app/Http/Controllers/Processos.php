<?php

namespace App\Http\Controllers;

use App\Data\Models\Processo as ProcessoModel;
use App\Data\Models\Processo;
use App\Data\Repositories\Andamentos as AndamentosRepository;
use App\Data\Repositories\Apensos as ApensosRepository;
use App\Data\Repositories\Processos as ProcessosRepository;
use App\Data\Scope\Processo as ProcessoScope;
use App\Http\Requests\Andamento;
use App\Http\Requests\Apenso as ApensoRequest;
use App\Http\Requests\Processo as ProcessoRequest;
use Illuminate\Support\Facades\Cache;

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
        $p =  $repository->createFromRequest($request);
        $AndamentosRequest = new Andamento();

        $a = new AndamentosRepository();
        $a->createFromProcessos($request, $p);


        Cache::forget('getProcessosData'.$request->id);

        return redirect()
                ->route('home.index')
                ->with($this->getSuccessMessage());
    }

    public function apensar(ApensoRequest $request, ApensosRepository $repository)
    {
        $repository->createFromRequest($request);

        Cache::forget('getProcessosData'.$request->processo_id);

        return redirect()
          ->route('processos.show', $request->processo_id)
          ->with('processo', ProcessoModel::find($request->processo_id))
          ->with('formDisabled', true)
          ->with($this->repository->getProcessosData($request->processo_id))
          ->with($this->getSuccessMessage());
    }

    public function show($id)
    {
        return view('processos.form')
            ->with('processo', ProcessoModel::withoutGlobalScope(ProcessoScope::class)->find($id))
            ->with('formDisabled', true)
            ->with($this->repository->getProcessosData($id));
    }
}
