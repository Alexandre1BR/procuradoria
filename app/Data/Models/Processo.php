<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numero_judicial',
        'numero_alerj',
    ];

    public function andamentos()
    {
        $this->hasMany(Andamento::class);
    }
}
