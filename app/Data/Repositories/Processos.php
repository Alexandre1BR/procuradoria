<?php

namespace App\Data\Repositories;

use Illuminate\Http\Request;

class Processos
{
    /**
     * @param Request $request
     *
     * @return void
     */
    public function createFromRequest(Request $request)
    {
        Tribunal::create($request->all());

        $request->session()->flash('status', 'Dado salvo com sucesso!');
    }
}
