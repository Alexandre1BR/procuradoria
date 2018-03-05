<?php

namespace App\Http\Controllers;

use App\Data\Models\Tribunal;
use App\Data\Repositories\Tribunais as TribunaisRepository;
use App\Http\Requests\Tribunal as TribunalRequest;
use Illuminate\Http\Request;

class Tribunais extends Controller
{
    /**
     * @var TribunaisRepository
     */
    private $repository;

    public function __construct(TribunaisRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(TribunaisRepository $tribunais, Request $request)
    {
        return $request->expectsJson()
            ? $tribunais->search($request)
            : view('tribunais.index')
                ->with('pesquisa', $request->get('pesquisa'))
                ->with('tribunais', $tribunais->search($request));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('tribunais.form')
            ->with(['tribunal' => $this->repository->new()]);
    }

    /**
     * @param TribunalRequest     $request
     * @param TribunaisRepository $repository
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(TribunalRequest $request, TribunaisRepository $repository)
    {
        $repository->createFromRequest($request);

        return redirect()
            ->route('tribunais.index')
            ->with($this->getSuccessMessage());
    }

    public function show($id)
    {
        $tribunal = Tribunal::find($id);

        return view('tribunais.form')
            ->with('tribunal', $tribunal)
            ->with('processos', $tribunal->processos)
            ->with('formDisabled', true);
    }
}
