<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Models\Tipo_Juiz
 *
 * @mixin \Eloquent
 */
class Tipo_Juiz extends Model
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
