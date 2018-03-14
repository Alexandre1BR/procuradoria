<?php

namespace App\Data\Models;

use App\Data\Presenters\ProcessoPresenter;
use App\Data\Scope\Processo as ProcessoScope;
use Spatie\Tags\HasTags;
use Illuminate\Support\Facades\Cache;


class Processo extends BaseModel
{
    use HasTags;

    protected $dates = [
        'data_distribuicao',
        'data_recebimento',
    ];

    protected $with = [
        'acao',
        'tribunal',
        'procurador',
        'assessor',
        'estagiario',
        'tags',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'data_distribuicao',
        'data_recebimento',
        'numero_judicial',
        'numero_alerj',
        'tribunal_id', //'origem_id',
        'vara', //'origem_complemento',
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
        'observacao',
        'data_arquivamento',
        'observacao_arquivamento',
        'link',
        'site_alerj_link',
        'tipo_processo_id',
    ];

    protected $presenters = [
        'data_distribuicao_formatado',
        'data_recebimento_formatado',
    ];

    protected $dataTypes = [
        'numero_judicial'               => 'id',
        'numero_alerj'                  => 'id',
        'tribunal_id'                   => 'id',
        'vara'                          => 'string',
        'data_distribuicao'             => 'date',
        'data_recebimento'              => 'date',
        'acao_id'                       => 'id',
        'juiz_id'                       => 'id',
        'relator_id'                    => 'id',
        'apensos_obs'                   => 'string',
        'autor'                         => 'string',
        'reu'                           => 'string',
        'objeto'                        => 'string',
        'merito'                        => 'string',
        'liminar'                       => 'string',
        'recurso'                       => 'string',
        'procurador_id'                 => 'id',
        'estagiario_id'                 => 'id',
        'assessor_id'                   => 'id',
        'tipo_meio_id'                  => 'id',
        'observacao'                    => 'string',
        'data_arquivamento'             => 'date',
        'observacao_arquivamento'       => 'string',
        'tags'                          => 'tags',
        'link'                          => 'link',
        'site_alerj_link'               => 'link',
        'tipo_processo_id'              => 'id',
    ];

    public function getDataSemHoraAttribute()
    {
        return $this->data_distribuicao->format('d/m/Y');
    }

    public function andamentos()
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

    public function tipoProcesso()
    {
        return $this->belongsTo(TipoProcesso::class);
    }

    public function apensos()
    {
        return $this->hasMany(Apenso::class);
    }

    public function getPresenterClass()
    {
        return ProcessoPresenter::class;
    }

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ProcessoScope());
    }

    public function save(array $options = []){
        Cache::forget('getProcessosData'.$this->id);
        parent::save();
    }
}
