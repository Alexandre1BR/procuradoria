<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Tribunais as TribunaisRepository;
use App\Http\Requests\Tribunal as TribunalRequest;

class Tribunais extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('tribunais.create');
    }

    /**
     * @param TribunalRequest     $request
     * @param TribunaisRepository $repository
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(TribunalRequest $request, TribunaisRepository $repository)
    {
        $repository->createFromRequest($request);

        return $this->create();
    }

}
