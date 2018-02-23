<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoPrazo;

class TiposPrazos extends Base
{
    protected $model = TipoPrazo::class;

    public function getAllIds()
    {
        return TipoPrazo::pluck('id');
    }
}
