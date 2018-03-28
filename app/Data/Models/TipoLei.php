<?php

namespace App\Data\Models;

class TipoLei extends BaseModel
{
    protected $table = 'tipos_leis';

    protected $fillable = [
        'nome',
    ];
}
