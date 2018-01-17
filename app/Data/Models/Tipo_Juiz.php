<?php

namespace App\Data\Models;

class Tipo_Juiz extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tipos_juizes';

    protected $fillable = [
        'nome',
    ];
}
