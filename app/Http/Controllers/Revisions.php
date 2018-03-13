<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\Models\Tribunal;
use App\Data\Repositories\Revisions as RevisionsRepository;

class Revisions extends Controller
{
    /**
     * @var RevisionsRepository
     */
    private $repository;

    public function __construct(RevisionsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(RevisionsRepository $revisions, Request $request)
    {
        return $request->expectsJson()
            ? $revisions->search($request)
            : view('revisions.index')
                ->with('pesquisa', $request->get('pesquisa'))
                ->with('revisions', $revisions->search($request));
    }

    public function show($id)
    {
        $tribunal = Tribunal::find($id);

        return view('revisions.form')
            ->with('tribunal', $tribunal)
            ->with('processos', $tribunal->processos)
            ->with('formDisabled', true);
    }
}
