<?php

namespace App\Http\Controllers;

use App\Data\Models\Processo;
use App\Data\Models\Acao as ModelAcao;
use App\Data\Models\Juiz as ModelJuiz;
use App\Data\Models\Meio as ModelMeio;
use App\Data\Models\User as ModelUser;
use App\Data\Models\Tribunal as ModelTribunal;
use App\Http\Requests\Processo as ProcessoRequest;
use App\Data\Repositories\Processos as ProcessosRepository;

class Processos extends Controller
{
    public function create()
    {
        return view(
            'processos.create',
            [
                'juizes'    => ModelJuiz::orderBy('nome')->pluck('nome', 'id'),
                'tribunais' => ModelTribunal::orderBy('nome')->pluck('nome', 'id'),
                'usuarios'  => ModelUser::orderBy('name')->pluck('name', 'id'),
                'meios'     => ModelMeio::orderBy('nome')->pluck('nome', 'id'),
                'acoes'     => ModelAcao::orderBy('nome')->pluck('nome', 'id'),
            ]
        );
    }

    public function store(ProcessoRequest $request, ProcessosRepository $repository)
    {
        $repository->createFromRequest($request);

        return $this->create();
    }

    public function detail(ProcessoRequest $request)
    {
        $processo = Processo::find($request->id);

        return view('processos.detail', compact('processo'));
    }
}
