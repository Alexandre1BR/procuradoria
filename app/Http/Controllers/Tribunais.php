<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Tribunais as TribunaisRepository;
use App\Http\Requests\Tribunal as TribunalRequest;

class Tribunais extends Controller
{
    public function create()
    {
        return view('tribunais.create');
    }

    public function store(TribunalRequest $request, TribunaisRepository $repository)
    {
        $repository->createFromRequest($request);

        return $this->create();
    }

    public function get(){


    }
}
