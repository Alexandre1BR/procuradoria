<?php

namespace App\Data\Models;

use App\Data\Presenters\AndamentoPresenter;
use Illuminate\Support\Facades\Cache;

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
        'data_andamento',
        'observacoes',
    ];

    /**
     * @var array
     */
    protected $with = ['tipoAndamento', 'tipoEntrada', 'tipoPrazo'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = [
        'data_prazo',
        'data_entrega',
        'data_andamento',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function processo()
    {
        return $this->belongsTo(Processo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoAndamento()
    {
        return $this->belongsTo(TipoAndamento::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoEntrada()
    {
        return $this->belongsTo(TipoEntrada::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoPrazo()
    {
        return $this->belongsTo(TipoPrazo::class);
    }

    /**
     * @return string
     */
    public function getPresenterClass()
    {
        return AndamentoPresenter::class;
    }

    /**
     * @param array $options
     *
     * @return bool|void
     */
    public function save(array $options = [])
    {
        Cache::forget('getProcessosData'.$this->processo_id);
        parent::save();
    }
}
