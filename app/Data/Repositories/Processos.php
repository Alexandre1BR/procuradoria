<?php

namespace App\Data\Repositories;

use App\Data\Models\Processo;

class Processos
{
    public function createFromRequest($request)
    {
        return Processo::create($request->all());
    }
}
