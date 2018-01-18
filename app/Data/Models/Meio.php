<?php

namespace App\Data\Models;

class Meio extends BaseModel
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
