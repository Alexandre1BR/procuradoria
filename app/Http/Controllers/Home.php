<?php
namespace App\Http\Controllers;

use App\Support\Constants;
use Illuminate\Http\Request;

class Home extends Controller
{
    private function getProcessosController()
    {
        return subsystem_is(Constants::SUBSYSTEM_OPINIOES) ? app(Opinions::class) : app(Processos::class);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->getProcessosController()->index($request);
    }
}
