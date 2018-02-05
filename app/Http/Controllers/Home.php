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
     * @return mixed
     */
    private function buildView(Request $request, $data)
    {
        return view('home.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with($this->processosRepository->getProcessosData())
            ->with('processo', new Processo())
            ->with('processos', $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $results = $this->processosRepository->search($request);

        return $request->expectsJson()
            ? $results
            : $this->buildView($request, $results);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        return $this->buildView($request, $this->processosRepository->filter($request));
    }
}
