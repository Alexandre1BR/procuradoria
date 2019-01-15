<?php

namespace App\Http\Controllers;

use App\Data\Models\Busca;
use App\Data\Repositories\Buscas as BuscasRepository;
use Illuminate\Http\Request;

class Buscas extends Controller
{
    /**
     * @var BuscasRepository
     */
    private $repository;

    /**
     * Buscas constructor.
     *
     * @param BuscasRepository $repository
     */
    public function __construct(BuscasRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param BuscasRepository $buscasRepository
     * @param Request          $request
     *
     * @return $this|mixed
     */
    public function index(BuscasRepository $buscasRepository, Request $request)
    {
        return $request->expectsJson()
            ? $buscasRepository->search($request)
            : view('buscas.index')
                ->with('pesquisa', $request->get('pesquisa'))
                ->with('lastLog', $buscasRepository->getLastLog())
                ->with('proceedings', $buscasRepository->search($request));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('buscas.form')->with([
            'searchTerm' => $this->repository->new(),
        ]);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        return view('buscas.form')
            ->with('searchTerm', Busca::find($id))
            ->with('formDisabled', true);
    }

    public function ignore($id)
    {
        app(BuscasRepository::class)->ignoreProceeding($id);

        return redirect()->back();
    }

    public function import($id)
    {
        app(BuscasRepository::class)->importProceeding($id);

        return redirect()->back();
    }
}
