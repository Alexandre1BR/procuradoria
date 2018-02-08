<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Meios as MeiosRepository;

class Meios extends Controller
{
    public function index()
    {
        return app(MeiosRepository::class)->all();
    }
}
