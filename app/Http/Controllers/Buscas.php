<?php

namespace App\Http\Controllers;

use App\Data\Models\Busca;
use Illuminate\Http\Request;
use App\Data\Repositories\Buscas as BuscasRepository;

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
     * @param BuscasRepository $searchTermsRepository
     * @param Request             $request
     *
     * @return $this|mixed
     */
    public function index(
        BuscasRepository $searchTermsRepository,
        Request $request
    ) {
        return $request->expectsJson()
            ? $searchTermsRepository->search($request)
            : view('buscas.index')
                ->with('pesquisa', $request->get('pesquisa'))
                ->with('proceedings', $searchTermsRepository->search($request));
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
