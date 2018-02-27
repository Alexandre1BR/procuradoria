<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoEntrada;

class TiposEntradas extends Base
{
    protected $model = TipoEntrada::class;

    public function getAllIds()
    {
        return TipoEntrada::pluck('id');
    }
}
