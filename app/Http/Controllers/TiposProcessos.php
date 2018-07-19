<?php
namespace App\Http\Controllers;

use App\Data\Repositories\TiposProcessos as TiposProcessosRepository;

class TiposProcessos extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return app(TiposProcessosRepository::class)->all();
    }
}
