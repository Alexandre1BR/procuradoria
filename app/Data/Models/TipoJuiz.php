<?php

namespace App\Data\Models;

class TipoJuiz extends BaseModel
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
