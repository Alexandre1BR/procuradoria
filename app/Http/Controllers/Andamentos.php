<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Andamentos as AndamentosRepository;
use App\Http\Requests\Andamento as AndamentoRequest;

class Andamentos extends Controller
{
    public function create()
    {
        return view('andamentos.create');
    }

    public function store(AndamentoRequest $request, AndamentosRepository $repository)
    {
        $repository->createFromRequest($request);

        return $this->create();
    }
}
