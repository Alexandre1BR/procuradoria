<?php

namespace App\Http\Controllers;

use App\Data\Repositories\ArmazenadosEm as ArmazenadosEmRepository;

class ArmazenadosEm extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return app(ArmazenadosEmRepository::class)->all();
    }
}
