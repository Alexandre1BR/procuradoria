<?php

namespace App\Http\Controllers;

use App\Data\Models\Juiz;
use App\Http\Requests\Juiz as JuizRequest;

use App\Data\Models\Tipo_Juiz as ModelTipo_Juiz;
use App\Data\Models\Tribunal as ModelTribunal;

class Juizes extends Controller
{
    public function create()
    {
        $tiposjuizes = ModelTipo_Juiz::pluck('nome', 'id');
        $tiposjuizes = $tiposjuizes->sort();

        //dd($tiposjuizes);

        $tribunais = ModelTribunal::pluck('nome', 'id');
        $tribunais = $tribunais->sort();
        //dd($items);
        return view('juizes.create', compact('tiposjuizes','tribunais'));
    }

    public function store(JuizRequest $request)
    {
        Juiz::create($request->all());
    }
}
