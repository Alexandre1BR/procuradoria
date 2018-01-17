<?php

namespace App\Http\Controllers;

use App\Data\Models\Juiz;
use App\Data\Models\TipoJuiz as ModelTipoJuiz;
use App\Data\Models\Tribunal as ModelTribunal;
use App\Http\Requests\Juiz as JuizRequest;

class Juizes extends Controller
{
    public function create()
    {
        $tiposjuizes = ModelTipoJuiz::pluck('nome', 'id');
        $tiposjuizes = $tiposjuizes->sort();

        //dd($tiposjuizes);

        $tribunais = ModelTribunal::pluck('nome', 'id');
        $tribunais = $tribunais->sort();
        //dd($items);
        return view('juizes.create', compact('tiposjuizes', 'tribunais'));
    }

    public function store(JuizRequest $request)
    {
        Juiz::create($request->all());
    }
}
