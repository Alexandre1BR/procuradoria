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

    public function tipoJuiz()
    {
        return $this->belongsTo(TipoJuiz::class);
    }

    public function lotacao()
    {
        return $this->belongsTo(Tribunal::class);
    }

    public function processos_mode_java()
    {
        app(Processo::class)->orWhere('juiz_id', $this->id)->orWhere(function ($query_) {
            $query_->orWhere('relator_id', $this->id);
        })->get();

        return $query;
    }

    public function processos()
    {
        return $this->hasMany(Processo::class)->orWhere('relator_id', '=', $this->id);
    }
}
