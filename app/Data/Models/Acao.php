<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Models\Acao.
 *
 * @mixin \Eloquent
 */
class Acao extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'acoes';

    protected $fillable = [
        'nome',
        'abreviacao',
    ];
}
