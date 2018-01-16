<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Models\Tipo_Andamento.
 *
 * @mixin \Eloquent
 */
class Tipo_Andamento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tipos_andamentos';

    protected $fillable = [
        'nome',
    ];
}
