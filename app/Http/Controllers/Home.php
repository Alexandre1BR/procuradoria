<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Processos as ProcessosRepositorio;
use App\Http\Requests\Processo as ProcessoRequest;

class Home extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param ProcessosRepositorio $processos
     * @param ProcessoRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProcessosRepositorio $processos, ProcessoRequest $request)
    {
        return view('home.index')
                ->with('pesquisa', $request->get('pesquisa'))
                ->with('processos', $processos->search($request));
    }
}
