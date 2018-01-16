<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Meio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'meios';

    protected $fillable = [
        'nome',
    ];
}
