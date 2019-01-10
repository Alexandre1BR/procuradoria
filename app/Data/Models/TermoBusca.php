<?php

namespace App\Data\Models;

class TermoBusca extends BaseModel
{
    /**
     * @var array
     */
    protected $fillable = ['tribunal_id', 'termo', 'ultima_busca_em'];

    protected $table = 'termos_busca';
}
