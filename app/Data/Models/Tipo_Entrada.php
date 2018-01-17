<?php

namespace App\Data\Models;

class Tipo_Entrada extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tipos_entradas';

    protected $fillable = [
        'nome',
    ];
}
