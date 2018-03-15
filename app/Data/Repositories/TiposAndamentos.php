<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoAndamento as TipoAndamento;

/**
 * Class TiposAndamentos
 * @package App\Data\Repositories
 */
class TiposAndamentos extends Base
{
    /**
     * @var string
     */
    protected $model = TipoAndamento::class;

    /**
     * @return mixed
     */
    public function getAllIds()
    {
        return TipoAndamento::pluck('id');
    }
}
