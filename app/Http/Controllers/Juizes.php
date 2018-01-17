<?php

namespace App\Http\Controllers;

use App\Data\Models\Juiz;
use App\Data\Models\TipoJuiz as ModelTipoJuiz;
use App\Data\Models\Tribunal as ModelTribunal;
use App\Data\Repositories\Juizes as JuizesRepository;
use App\Http\Requests\Juiz as JuizRequest;
use Illuminate\Http\Request;

class Juizes extends Controller
{
    public function create()
    {
        return view('juizes.create', $this->getJuizesData());
    }

    public function store(JuizRequest $request, JuizesRepository $repository)
    {
        $repository->createFromRequest($request);

        return redirect()->route('juizes.index');
    }

    public function getJuizesData(): array
    {
        return [
            'tiposjuizes' => ModelTipoJuiz::orderBy('nome')->pluck('nome', 'id'),
            'tribunais'   => ModelTribunal::orderBy('nome')->pluck('nome', 'id'),
        ];
    }

    public function detail(JuizRequest $request)
    {
        //dd($request);

        $juiz = Juiz::find($request->id);

        return view('juizes.detail')->with(['juiz'=>$juiz]);
    }

    public function index(JuizesRepository $juizes, Request $request)
    {
        return view('juizes.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with('juizes', $juizes->search($request));
    }
}
