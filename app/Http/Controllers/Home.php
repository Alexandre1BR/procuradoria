<?php

namespace App\Http\Controllers;

use App\Data\Models\Processo;
use App\Data\Repositories\Processos as ProcessosRepository;
use App\Http\Requests\Processo as ProcessoRequest;
use Illuminate\Http\Request;

class Home extends Controller
{
    protected $processosRepository;

    /**
     * Create a new controller instance.
     *
     * @param ProcessosRepository $processosRepository
     */
    public function __construct(ProcessosRepository $processosRepository)
    {
        $this->processosRepository = $processosRepository;
    }

    /**
     * @param ProcessoRequest|Request $request
     *
     * @return mixed
     */
    private function buildView(Request $request)
    {
        return view('home.index')
            ->with('pesquisa', $request->get('search'))
            ->with('processos_arquivados', $request->get('processos_arquivados'))
            ->with('processo', new Processo());
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $request->expectsJson()
            ? $this->processosRepository->filter($request)
            : $this->buildView($request);
    }
}
