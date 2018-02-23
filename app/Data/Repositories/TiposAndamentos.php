<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoAndamento as TipoAndamento;

class TiposAndamentos extends Base
{
    protected $model = TipoAndamento::class;

    public function getAllIds()
    {
        return TipoAndamento::pluck('id');
    }
}
