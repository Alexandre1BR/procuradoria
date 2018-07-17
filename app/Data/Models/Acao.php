<?php

namespace App\Data\Models;

class Acao extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'acoes';

    /**
     * @var array
     */
    protected $fillable = ['nome', 'abreviacao'];
}
