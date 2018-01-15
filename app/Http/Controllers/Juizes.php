<?php

namespace App\Http\Controllers;

use App\Data\Models\Juiz;
use App\Http\Requests\Juiz as JuizRequest;

class Juizes extends Controller
{
    public function create()
    {
        return view('juizes.create');
    }

    public function store(JuizRequest $request)
    {
        Juiz::create($request->all());
    }
}
