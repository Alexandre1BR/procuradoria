<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Processos as ProcessosRepository;
use App\Http\Requests\Processo as ProcessoRequest;

class Processos extends Controller
{

    public function create()
    {
        return view('processos.create');
    }

    public function store(ProcessoRequest $request, ProcessosRepository $repository)
    {
       $repository->createFromRequest($request);

        return $this->create();
    }

    public function search()
    {
        $processos = null;
        dump($processos);
        return view('processos.search', compact('processos'));
    }

    public function resultSearch(ProcessoRequest $request, ProcessosRepository $repository)
    {
        $processos = $repository->searchFromRequest($request);
        dump($processos);
        dump(count($processos) == 0);
        dump($processos != null);
        If($processos != null && count($processos) == 0){
            $request->session()->flash('warning', 'Processo não encontrado!');
        }
        return view('processos.search', compact('processos'));
    }
}
