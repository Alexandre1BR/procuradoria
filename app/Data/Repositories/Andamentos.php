<?php

namespace App\Data\Repositories;

use App\Data\Models\Andamento;

class Andamentos
{
    public function createFromRequest($request)
    {
        return Andamento::create($request->all());
    }
}
