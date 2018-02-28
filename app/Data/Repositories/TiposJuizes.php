<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoJuiz;

class TiposJuizes extends Base
{
    protected $model = TipoJuiz::class;


    public function getAllTiposJuizes()
    {
        $query = TipoJuiz::query();
    }
}
