<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Juiz extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'juizes';

    protected $fillable = [
        'nome',
        'lotacao_id',
        'tipo_juiz_id',
    ];
}
