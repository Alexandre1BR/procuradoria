<?php

namespace App\Data\Models;

class Busca extends BaseModel
{
    protected $connection = 'tribunais';

    protected $table = 'proceedings';

    /**
     * @var array
     */
    protected $fillable = [
        'instance',
        'number',
        'scraped',
        'search_term',
        'year',
        'imported_at',
        'imported_by_id',
    ];

    public function getScrapedLinesAttribute()
    {
        return json_decode($this->scraped, true);
    }

    public function ignoredBy()
    {
        return User::find($this->ignored_by_id);
    }

    public function importedBy()
    {
        return User::find($this->imported_by_id);
    }

    public function processo()
    {
        return Processo::whereRaw(
            "regexp_replace(numero_judicial, '[^0-9]', '', 'g') ilike '%".
                only_numbers($this->number).
                "%'"
        )->first();
    }
}
