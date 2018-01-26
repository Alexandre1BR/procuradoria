<?php

namespace App\Http\Controllers;

use App\Data\Models\Acao as ModelAcao;
use App\Data\Models\Andamento as ModelAndamento;
use App\Data\Models\Apenso as ModelApenso;
use App\Data\Models\Juiz as ModelJuiz;
use App\Data\Models\Meio as ModelMeio;
use App\Data\Models\Processo;
use App\Data\Models\Tribunal as ModelTribunal;
use App\Data\Models\User as ModelUser;
use App\Data\Repositories\Apensos as ApensosRepository;
use App\Data\Repositories\Processos as ProcessosRepository;
use App\Http\Requests\Apenso as ApensoRequest;
use App\Http\Requests\Processo as ProcessoRequest;

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
        return view('processos.form', $this->getProcessosData())
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
            ->with($this->getProcessosData($id));
    }

    /**
     * @param null $id
     *
     * @return array
     */
    public function getProcessosData($id = null)
    {
        return [
            'juizes'     => ModelJuiz::orderBy('nome')->pluck('nome', 'id'),
            'tribunais'  => ModelTribunal::orderBy('nome')->pluck('nome', 'id'),
            'usuarios'   => ModelUser::orderBy('name')->pluck('name', 'id'),
            'meios'      => ModelMeio::orderBy('nome')->pluck('nome', 'id'),
            'acoes'      => ModelAcao::orderBy('nome')->pluck('nome', 'id'),
            'andamentos' => ModelAndamento::where('processo_id', $id)->get(),
            'apensos'    => ModelApenso::Where('processo_id', $id)->orWhere('apensado_id', $id)->get(),
            'processos'  => Processo::orderBy('numero_judicial')->pluck('numero_judicial', 'id')
        ];
    }
}
