<?php

namespace App\Data\Repositories;

use App\Data\Models\Tribunal;

class Tribunais
{
    public function createFromRequest($request)
    {
        return Tribunal::create($request->all());
    }
}
