<?php
namespace App\Data\Models;

class TipoUsuario extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tipos_usuarios';

    /**
     * @var array
     */
    protected $fillable = ['nome'];
}
