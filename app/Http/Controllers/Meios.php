<?php

namespace App\Http\Controllers;

use App\Data\Models\Meio;
use App\Http\Requests\Meio as MeioRequest;

class Meios extends Controller
{
    public function create()
    {
        return view('meios.create');
    }

    public function store(MeioRequest $request)
    {
        Meio::create($request->all());
    }
}
