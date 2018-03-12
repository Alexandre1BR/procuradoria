<?php

namespace App\Data\Models;

class TipoProcesso extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tipos_processos';

    protected $fillable = [
        'nome',
    ];
}
