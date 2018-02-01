<?php

namespace App\Http\Controllers;

use App\Data\Models\Processo;
use App\Data\Repositories\Processos as ProcessosRepository;
use App\Http\Requests\Processo as ProcessoRequest;
use Illuminate\Http\Request;

class Home extends Controller
{
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @param ProcessosRepository $repository
     */
    public function __construct(ProcessosRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param ProcessoRequest $request
     * @param $data
     *
     * @return mixed
     */
    private function buildView(Request $request, $data)
    {
        return view('home.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with($this->repository->getProcessosData())
            ->with('processo', new Processo())
            ->with('processos', $data);
    }

    /**
     * @param ProcessoRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->buildView($request, $this->repository->search($request));
    }

    /**
     * @param ProcessoRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        return $this->buildView($request, $this->repository->filter($request));
    }
}
