<?php

namespace App\Http\Controllers;

use App\Data\Models\Lei;
use App\Data\Repositories\Leis as LeisRepository;
use App\Http\Requests\Lei as LeiRequest;
use Illuminate\Http\Request;

class Leis extends Controller
{
    /**
     * @var LeisRepository
     */
    private $repository;

    /**
     * Leis constructor.
     *
     * @param LeisRepository $repository
     */
    public function __construct(LeisRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param null $processo_id
     *
     * @return $this
     */
    public function create($processo_id = null)
    {
        return view('leis.form')
                ->with('processo_id', $processo_id)
                ->with(['lei' => $this->repository->new()]);
    }

    /**
     * @param LeiRequest     $request
     * @param LeisRepository $repository
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LeiRequest $request, LeisRepository $repository)
    {
        $repository->createFromRequest($request);

        return redirect()->route('processos.show', ['processo_id' => $request->input('processo_id')])
//            ->with('processo_id',$request->input('processo_id'))
            ->with($this->getSuccessMessage());
    }

    /**
     * @param LeisRepository $leis
     * @param Request        $request
     *
     * @return $this
     */
    public function index(LeisRepository $leis, Request $request)
    {
        return view('leis.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with('leis', $leis->search($request));
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function show($id)
    {
        return view('leis.form')
            ->with('formDisabled', true)
            ->with(['lei' => Lei::find($id)]);
    }
}
