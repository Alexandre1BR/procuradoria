<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Processos;
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
     * @param Processos       $processos
     * @param ProcessoRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Processos $processos, ProcessoRequest $request)
    {
        return view('home.index')
                ->with('pesquisa', $request->get('pesquisa'))
                ->with('processos', $processos->search($request));
    }
}
