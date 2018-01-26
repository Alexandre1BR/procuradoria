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
    /**
     * @var JuizesRepository
     */
    private $repository;

    public function __construct(JuizesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create()
    {
        return view('juizes.form', $this->getJuizesData())
            ->with(['juiz' => $this->repository->new()]);
    }

    public function store(JuizRequest $request, JuizesRepository $repository)
    {
        $repository->createFromRequest($request);

        return redirect()->route('juizes.index');
    }

    public function getJuizesData(): array
    {
        return [
            'tiposJuizes' => ModelTipoJuiz::orderBy('nome')->pluck('nome', 'id'),
            'tribunais'   => ModelTribunal::orderBy('nome')->pluck('nome', 'id'),
        ];
    }

    public function show($id)
    {
        return view('juizes.form')
            ->with('juiz', Juiz::find($id))
            ->with('formDisabled', true)
            ->with($this->getJuizesData());
    }

    public function index(JuizesRepository $juizes, Request $request)
    {
        return view('juizes.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with('juizes', $juizes->search($request));
    }
}
