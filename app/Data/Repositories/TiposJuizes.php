<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoJuiz;

/**
 * Class TiposJuizes
 * @package App\Data\Repositories
 */
class TiposJuizes extends Base
{
    /**
     * @var string
     */
    protected $model = TipoJuiz::class;

    /**
     *
     */
    public function getAllTiposJuizes()
    {
        $query = TipoJuiz::query();
    }
}
