<?php

namespace App\Data\Models;

class ProcessoBot extends BaseModel
{
    /**
     * @var array
     */
    protected $fillable = [
        'tribunal_id',
        'instancia',
        'numero',
        'observacoes',
        'termo_buscado',
        'ano',
        'ignorado_em',
        'ignorado_por_id',
        'importado_em',
        'importado_por_id',
        'processo_id',
    ];

    protected $table = 'processos_bot';
}
