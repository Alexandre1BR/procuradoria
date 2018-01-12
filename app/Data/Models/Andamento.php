<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Models\Andamento
 *
 * @mixin \Eloquent
 */
class Andamento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo_prazo_id',
        'processo_id',
        'data_prazo',
        'data_entrega',

    ];
}
