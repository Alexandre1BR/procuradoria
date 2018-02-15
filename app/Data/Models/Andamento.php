<?php

namespace App\Data\Models;

use App\Data\Presenters\AndamentoPresenter;

class Andamento extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'processo_id',
        'tipo_andamento_id',
        'tipo_entrada_id',
        'tipo_prazo_id',
        'data_prazo',
        'data_entrega',
        'observacoes',
    ];

    protected $with = ['tipoAndamento', 'tipoEntrada', 'tipoPrazo'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = [
        'data_prazo',
        'data_entrega',
    ];

    public function processo()
    {
        return $this->belongsTo(Processo::class);
    }

    public function tipoAndamento()
    {
        return $this->belongsTo(TipoAndamento::class);
    }

    public function tipoEntrada()
    {
        return $this->belongsTo(TipoEntrada::class);
    }

    public function tipoPrazo()
    {
        return $this->belongsTo(TipoPrazo::class);
    }

    public function getPresenterClass()
    {
        return AndamentoPresenter::class;
    }
}
