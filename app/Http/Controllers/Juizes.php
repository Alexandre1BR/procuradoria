<?php

namespace App\Http\Controllers;

use App\Data\Models\Juiz;
use App\Http\Requests\Juiz as JuizRequest;

use App\Data\Models\Tipo_Juiz as ModelTipo_Juiz;

class Juizes extends Controller
{
    public function create()
    {
        $items = ModelTipo_Juiz::pluck('nome', 'id');
        $items = $items->sort();
        //dd($items);
        return view('juizes.create', compact('items'));
    }

    public function store(JuizRequest $request)
    {
        Juiz::create($request->all());
    }
}
