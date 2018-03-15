<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoPrazo;

/**
 * Class TiposPrazos
 * @package App\Data\Repositories
 */
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
