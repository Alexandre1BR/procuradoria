<?php

namespace App\Data\Models;

class Tribunal extends BaseModel
{
    protected $table = 'tribunais';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'abreviacao',
        'url_api',
    ];

    public function processos()
    {
        return $this->hasMany(Processo::class);
    }
}
