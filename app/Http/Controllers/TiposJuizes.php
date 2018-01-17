<?php

namespace App\Http\Controllers;

use App\Data\Repositories\TiposJuizes as TiposJuizesRepository;
use App\Http\Requests\TipoJuiz as TipoJuizRequest;

class TiposJuizes extends Controller
{
    public function create()
    {
        return view('tipos_juizes.create');
    }

    public function store(TipoJuizRequest $request, TiposJuizesRepository $repository)
    {
        $repository->createFromRequest($request);

        return $this->create();
    }
}
