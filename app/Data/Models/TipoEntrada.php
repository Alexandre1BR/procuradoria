<?php

namespace App\Data\Models;

class TipoEntrada extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tipos_entradas';

    /**
     * @var array
     */
    protected $fillable = ['nome'];
}
