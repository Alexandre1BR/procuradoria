<?php

namespace App\Http\Controllers;

use App\Data\Repositories\TiposAndamentos as TiposAndamentosRepository;

class TiposAndamentos extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return app(TiposAndamentosRepository::class)->all();
    }
}
