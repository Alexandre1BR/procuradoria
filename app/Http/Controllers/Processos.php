<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Processos as ProcessosRepository;
use App\Http\Requests\Processo as ProcessoRequest;

class Processos extends Controller
{
    public function create()
    {
        return view('processos.create');
    }

    public function store(ProcessoRequest $request, ProcessosRepository $repository)
    {
        $repository->createFromRequest($request);

        return $this->create();
    }
}
