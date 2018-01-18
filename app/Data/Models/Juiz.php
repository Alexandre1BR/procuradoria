<?php

namespace App\Data\Models;

class Juiz extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'juizes';

    protected $fillable = [
        'nome',
        'lotacao_id',
        'tipo_juiz_id',
    ];

    public function tipo_juiz()
    {
        return $this->belongsTo(TipoJuiz::class);
    }

    public function tribunal()
    {
        return $this->belongsTo(Tribunal::class);
    }
}
