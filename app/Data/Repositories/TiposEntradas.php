<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoEntrada;

class TiposEntradas extends Base
{
    /**
     * @var string
     */
    protected $model = TipoEntrada::class;

    /**
     * @return mixed
     */
    public function getAllIds()
    {
        return TipoEntrada::pluck('id');
    }
}
