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

    /**
     * Juizes constructor.
     *
     * @param JuizesRepository $repository
     */
    public function __construct(JuizesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return $this
     */
    public function create()
    {
        return view('juizes.form', $this->getJuizesData())
            ->with(['juiz' => $this->repository->new()]);
    }

    /**
     * @param JuizRequest      $request
     * @param JuizesRepository $repository
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(JuizRequest $request, JuizesRepository $repository)
    {
        $repository->createFromRequest($request);

        return redirect()->route('juizes.index')
            ->with($this->getSuccessMessage());
    }

    /**
     * @return array
     */
    public function getJuizesData(): array
    {
        return [
            'tiposJuizes' => ModelTipoJuiz::orderBy('nome')->pluck('nome', 'id'),
            'tribunais'   => ModelTribunal::orderBy('nome')->pluck('nome', 'id'),
        ];
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        $juiz = Juiz::find($id);

        return view('juizes.form')
            ->with('juiz', $juiz)
            ->with('processos', $juiz->processos)
            ->with('formDisabled', true)
            ->with($this->getJuizesData());
    }

    /**
     * @param JuizesRepository $juizes
     * @param Request          $request
     *
     * @return $this|\Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(JuizesRepository $juizes, Request $request)
    {
        return $request->expectsJson()
            ? $juizes->search($request)
            : view('juizes.index')
                ->with('pesquisa', $request->get('pesquisa'))
                ->with('juizes', $juizes->search($request));
    }
}
