<?php

namespace App\Data\Models;

use App\Data\Presenters\LeiPresenter;
use Illuminate\Support\Facades\Cache;

class Lei extends BaseModel
{
    /**
     * @var array
     */
    protected $table = 'leis';

    protected $fillable = [
        'numero_lei',
        'autor',
        'assunto',
        'link',
        'artigo',
        'paragrafo',
        'inciso',
        'alinea',
        'item',
        'nivel_federativo_id',
        'tipo_lei_id',
    ];

    protected $with = ['tipoLei', 'nivelFederativo'];

    protected $presenters = ['lei_formatada'];

    public function getPresenterClass()
    {
        return LeiPresenter::class;
    }

    public function tipoLei()
    {
        return $this->belongsTo(TipoLei::class);
    }

    public function nivelFederativo()
    {
        return $this->belongsTo(NivelFederativo::class);
    }

    public function save(array $options = [])
    {
        Cache::forget('getProcessosData' . $this->processo_id);
        parent::save();
    }
}
