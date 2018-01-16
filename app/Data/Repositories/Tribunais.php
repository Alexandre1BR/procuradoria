<?php

namespace App\Data\Repositories;

use App\Data\Models\Tribunal;

class Tribunais
{
    /**
     * @param $request
     *
     * @return void
     */
    public function createFromRequest($request)
    {
        Tribunal::create($request->all());

        $request->session()->flash('status', 'Dado salvo com sucesso!');
    }
}
