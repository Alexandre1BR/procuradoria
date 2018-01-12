<?php

namespace App\Http\Controllers;

use App\Data\Models\Tipo_Juiz;
use App\Http\Requests\Tipo_Juiz as Tipo_JuizRequest;

class Tipos_Juizes extends Controller
{
    public function create()
    {
        return view('tipos_juizes.create');
    }

    public function store(Tipo_JuizRequest $request)
    {
        Tipo_Juiz::create($request->all());
    }
}
