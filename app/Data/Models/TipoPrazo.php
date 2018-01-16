<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPrazo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tipos_prazos';

    protected $fillable = [
        'nome',
    ];
}
