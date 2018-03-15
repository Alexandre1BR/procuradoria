<?php

namespace App\Data\Models;

class TipoAndamento extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tipos_andamentos';

    /**
     * @var array
     */
    protected $fillable = [
        'nome',
    ];
}
