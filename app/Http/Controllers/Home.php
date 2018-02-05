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
     * @param $data
     *
     * @return mixed
     */
    private function buildView(Request $request)
    {
        return view('home.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with($this->processosRepository->getProcessosData())
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
            ? $this->processosRepository->search($request)
            : $this->buildView($request);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        return $request->expectsJson()
            ? $this->processosRepository->search($request)
            : $this->buildView($request);

//        return $this->buildView($request, $this->processosRepository->filter($request));
    }
}
