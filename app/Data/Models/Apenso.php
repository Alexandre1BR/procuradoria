<?php
/**
 * Created by PhpStorm.
 * User: ovalenca
 * Date: 24/01/2018
 * Time: 15:55.
 */

namespace App\Data\Models;

use Illuminate\Support\Facades\Cache;

class Apenso extends BaseModel
{
    /**
     * @var array
     */
    protected $fillable = ['processo_id', 'apensado_id'];

    /**
     * @var array
     */
    protected $with = ['apensado', 'processo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function apensado()
    {
        return $this->belongsTo(Processo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function processo()
    {
        return $this->belongsTo(Processo::class);
    }

    /**
     * @param array $options
     *
     * @return bool|void
     */
    public function save(array $options = [])
    {
        Cache::forget('getProcessosData' . $this->processo_id);
        Cache::forget('getProcessosData' . $this->apensado_id);
        parent::save();
    }
}
