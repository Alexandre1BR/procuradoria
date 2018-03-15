<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoPrazo;

class TiposPrazos extends Base
{
    /**
     * @var string
     */
    protected $model = TipoPrazo::class;

    /**
     * @return mixed
     */
    public function getAllIds()
    {
        return TipoPrazo::pluck('id');
    }
}
