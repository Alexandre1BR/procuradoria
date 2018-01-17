<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Models\Tipo_Entrada.
 *
 * @mixin \Eloquent
 */
class TipoEntrada extends Model
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
