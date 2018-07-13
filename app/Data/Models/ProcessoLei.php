<?php
namespace App\Data\Models;

use Illuminate\Support\Facades\Cache;

class ProcessoLei extends BaseModel
{
    protected $table = 'processos_leis';

    protected $fillable = ['processo_id', 'lei_id'];

    protected $with = ['processo', 'lei'];

    public function processo()
    {
        return $this->belongsTo(Processo::class);
    }

    public function lei()
    {
        return $this->belongsTo(Lei::class);
    }

    public function save(array $options = [])
    {
        Cache::forget('getProcessosData' . $this->processo_id);
        parent::save();
    }
}
