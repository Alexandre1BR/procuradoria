<?php

namespace App\Http\Controllers;

use App\Data\Models\Acao as ModelAcao;
use App\Data\Models\Juiz as ModelJuiz;
use App\Data\Models\Meio as ModelMeio;
use App\Data\Models\Tribunal as ModelTribunal;
use App\Data\Models\User as ModelUser;
use App\Data\Repositories\Processos as ProcessosRepository;
use App\Http\Requests\Processo as ProcessoRequest;

class Processos extends Controller
{
    public function create()
    {
        $juizes = ModelJuiz::pluck('nome', 'id');
        $juizes = $juizes->sort();

        //dd($tiposjuizes);

        $tribunais = ModelTribunal::pluck('nome', 'id');
        $tribunais = $tribunais->sort();
        //dd($items);

        $usuarios = ModelUser::pluck('name', 'id');
        $usuarios = $usuarios->sort();

        $meios = ModelMeio::pluck('nome', 'id');
        $meios = $meios->sort();

        $acoes = ModelAcao::pluck('nome', 'id');
        $acoes = $acoes->sort();

        return view('processos.create', compact('juizes', 'tribunais', 'usuarios', 'meios', 'acoes'));
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
        if ($processos != null && count($processos) == 0) {
            $request->session()->flash('warning', 'Processo não encontrado!');
        }

        return view('processos.search', compact('processos'));
    }
}
