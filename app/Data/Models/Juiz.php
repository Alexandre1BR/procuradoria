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

    /**
     * @var array
     */
    protected $with = ['lotacao', 'tipoJuiz'];

    /**
     * @var array
     */
    protected $fillable = ['nome', 'lotacao_id', 'tipo_juiz_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoJuiz()
    {
        return $this->belongsTo(TipoJuiz::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lotacao()
    {
        return $this->belongsTo(Tribunal::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function processos()
    {
        return $this->hasMany(Processo::class)->orWhere('relator_id', '=', $this->id);
    }

    /**
     * @return string
     */
    public function getTextAttribute()
    {
        return "{$this->nome} ({$this->tipoJuiz->abreviacao}) - {$this->lotacao->abreviacao}";
    }
}
