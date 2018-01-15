<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Models\TipoUsuario
 *
 * @mixin \Eloquent
 */
class TipoUsuario extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "tipos_usuarios";

    protected $fillable = [
        'nome',
    ];
}