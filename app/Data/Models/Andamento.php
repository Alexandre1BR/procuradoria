<?php

namespace App\Data\Models;

class Andamento extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo_prazo_id',
        'processo_id',
        'data_prazo',
        'data_entrega',

    ];
}
