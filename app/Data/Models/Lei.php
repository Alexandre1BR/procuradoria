<?php
/**
 * Created by PhpStorm.
 * User: ovalenca
 * Date: 24/01/2018
 * Time: 15:55.
 */

namespace App\Data\Models;

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
}
