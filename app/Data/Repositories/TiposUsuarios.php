<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoUsuario;
use Illuminate\Support\Facades\Cache;

class TiposUsuarios extends Base
{
    protected $model = TipoUsuario::class;

    public function findByName($name)
    {
        return Cache::remember('TiposUsuarios-findByName-'.$name, 1000, function () use ($name) {
            return TipoUsuario::where('nome', $name)->first();
        });
    }
}
