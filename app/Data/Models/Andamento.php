<?php

namespace App\Data\Models;

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

    public function processo()
    {
        return $this->belongsTo(Processo::class,'processo_id','id');
    }

    public function tipoAndamento()
    {
        return $this->belongsTo(TipoAndamento::class, 'tipo_andamento_id','id');
    }

    public function tipoEntrada()
    {
        return $this->belongsTo(TipoEntrada::class, 'tipo_entrada_id','id');
    }

    public function tipoPrazo()
    {
        return $this->belongsTo(TipoPrazo::class,'tipo_prazo_id','id');
    }
}
