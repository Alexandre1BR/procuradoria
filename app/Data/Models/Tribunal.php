<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Tribunal extends Model
{
    protected $table = 'tribunais';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'url_api',
    ];
}
