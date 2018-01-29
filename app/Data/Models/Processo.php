<?php

namespace App\Data\Models;

use App\Data\Presenters\Processo as ProcessoPresenter;
use McCool\LaravelAutoPresenter\HasPresenter;

class Processo extends BaseModel implements HasPresenter
{
    protected $dates = [
        'data_distribuicao',
    ];

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

    public function getDataSemHoraAttribute()
    {
        return $this->data_distribuicao->format('d/m/Y');
    }

    public function andamento()
    {
        return  $this->hasMany(Andamento::class);
    }

    public function tribunal()
    {
        return $this->belongsTo(Tribunal::class);
    }

    public function acao()
    {
        return $this->belongsTo(Acao::class);
    }

    public function relator()
    {
        return $this->belongsTo(Juiz::class);
    }

    public function juiz()
    {
        self::with('juiz');

        return $this->belongsTo(Juiz::class);
    }

    public function procurador()
    {
        return $this->belongsTo(User::class);
    }

    public function estagiario()
    {
        return $this->belongsTo(User::class);
    }

    public function assessor()
    {
        return $this->belongsTo(User::class);
    }

    public function tipoMeio()
    {
        return $this->belongsTo(Meio::class);
    }

    public function getPresenterClass()
    {
        return ProcessoPresenter::class;
    }
}
