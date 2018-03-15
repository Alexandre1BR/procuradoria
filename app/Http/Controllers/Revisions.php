<?php

namespace App\Http\Controllers;

use App\Data\Models\Tribunal;
use App\Data\Repositories\Revisions as RevisionsRepository;
use Illuminate\Http\Request;

class Revisions extends Controller
{
    /**
     * @var RevisionsRepository
     */
    private $repository;

    /**
     * Revisions constructor.
     *
     * @param RevisionsRepository $repository
     */
    public function __construct(RevisionsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param RevisionsRepository $revisions
     * @param Request             $request
     *
     * @return $this|mixed
     */
    public function index(RevisionsRepository $revisions, Request $request)
    {
        return $request->expectsJson()
            ? $revisions->search($request)
            : view('revisions.index')
                ->with('pesquisa', $request->get('pesquisa'))
                ->with('revisions', $revisions->search($request));
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        $tribunal = Tribunal::find($id);

        return view('revisions.form')
            ->with('tribunal', $tribunal)
            ->with('processos', $tribunal->processos)
            ->with('formDisabled', true);
    }
}
