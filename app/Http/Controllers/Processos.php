<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Processos as ProcessosRepository;
use App\Http\Requests\Processo as ProcessoRequest;

class Processos extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('processos.create');
    }

    /**
     * @param ProcessoRequest $request
     * @param ProcessosRepository $repository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(ProcessoRequest $request, ProcessosRepository $repository)
    {
        $repository->createFromRequest($request);

        return $this->create();
    }
}
