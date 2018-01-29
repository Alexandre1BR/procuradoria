<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Andamentos;

class Agenda extends Controller
{
    /**
     * @var Andamentos
     */
    private $andamentosRepository;

    public function __construct(Andamentos $andamentosRepository)
    {
        $this->andamentosRepository = $andamentosRepository;
    }

    public function index()
    {
        return view('agenda.index');
    }

    public function feed()
    {
        return $this->andamentosRepository->feedForFullCalendar();
    }
}
