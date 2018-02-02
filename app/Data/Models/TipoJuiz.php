<?php

namespace App\Data\Models;

class TipoJuiz extends BaseModel
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

    public function getAbreviacaoAttribute()
    {
        if (strlen($this->nome) > 4) {
            return substr($this->nome, 0, 3).'.';
        }

        return $this->nome;
    }
}
