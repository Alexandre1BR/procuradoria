<?php

namespace App\Http\Controllers;

use App\Data\Models\Processo;
use App\Http\Requests\Processo as ProcessoRequest;

class Processos extends Controller
{
    public function create()
    {
        return view('processos.create');
    }

    public function store(ProcessoRequest $request)
    {
        Processo::create($request->all());
    }
}
