<?php

namespace App\Data\Models;

class Processo extends BaseModel
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
        'tipo_meio_id',
    ];

    public function andamento()
    {
        return  $this->hasMany(Andamento::class);
    }

    public function tribunal()
    {
        return $this->belongsTo(Tribunal::class, 'tribunal_id','id');
    }

    public function acao()
    {
        return $this->belongsTo(Acao::class,'acao_id','id');
    }

    public function relator()
    {
        return $this->belongsTo(Juiz::class, 'relator_id', 'id');
    }

    public function juiz()
    {
        return $this->belongsTo(Juiz::class, 'juiz_id', 'id');
    }

    public function procurador()
    {
        return $this->belongsTo(User::class, 'procurador_id', 'id');
    }

    public function estagiario()
    {
        return $this->belongsTo(User::class, 'estagiario_id', 'id');
    }

    public function assessor()
    {
        return $this->belongsTo(User::class, 'assessor_id', 'id');
    }

    public function tipo_meio()
    {
        return $this->belongsTo(Meio::class, 'tipo_meio_id','id');
    }
}
