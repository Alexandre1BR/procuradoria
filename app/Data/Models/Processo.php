<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numero_judicial',
        'numero_alerj',
        'tribunal_id', //'origem_id',
        'vara', //'origem_complemento',
        'data_distribuicao',
        'acao_id',
        'relator_id',
        'apensos_obs',
        'juiz_id',
        'autor',
        'reu',
        'objeto',
        'merito',
        'liminar',
        'recurso',
        'procurador_id',
        'estagiario_id',
        'assessor_id',
        'tipo_meio',
    ];

    public function andamentos()
    {
        $this->hasMany(Andamento::class);
    }
}
