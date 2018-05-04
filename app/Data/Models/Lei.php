<?php

namespace App\Data\Models;

use Illuminate\Support\Facades\Cache;

class Lei extends BaseModel
{
    /**
     * @var array
     */
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

    public function tipoLei()
    {
        return $this->belongsTo(TipoLei::class);
    }

    public function nivelFederativo()
    {
        return $this->belongsTo(NivelFederativo::class);
    }

//    public function processo()
//    {
//        return $this->hasMany(Apenso::class);
//    }

    public function save(array $options = [])
    {
        Cache::forget('getProcessosData'.$this->processo_id);
        parent::save();
    }
}
