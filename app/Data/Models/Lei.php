<?php
/**
 * Created by PhpStorm.
 * User: ovalenca
 * Date: 24/01/2018
 * Time: 15:55.
 */

namespace App\Data\Models;
use Illuminate\Support\Facades\Cache;

class Lei extends BaseModel
{
    protected $fillable = [
        'numero_lei',
        'autor',
        'assunto',
        'link',
        'processo_id',
    ];

    protected $with = ['processo'];

    public function processo()
    {
        return $this->belongsTo(Processo::class);
    }

    public function save(array $options = []){
        Cache::forget('getProcessosData'.$this->processo_id);
        parent::save();
    }
}
