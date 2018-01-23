<?php

namespace App\Http\Controllers;

use App\Data\Models\Tribunal;
use App\Data\Repositories\Tribunais as TribunaisRepository;
use App\Http\Requests\Tribunal as TribunalRequest;
use Illuminate\Http\Request;

class Tribunais extends Controller
{
    public function index(TribunaisRepository $tribunais, Request $request)
    {
        return view('tribunais.index')
                ->with('pesquisa', $request->get('pesquisa'))
                ->with('tribunais', $tribunais->search($request));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('tribunais.create');
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

//        return $this->create();
        return redirect()->route('tribunais.index');
    }

    public function detail(TribunalRequest $request)
    {
        $tribunal = Tribunal::find($request->id);

        return view('tribunais.show')->with(['tribunal'=>$tribunal]);
    }
}
