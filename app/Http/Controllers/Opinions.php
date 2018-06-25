<?php
namespace App\Http\Controllers;

use App\Data\Models\Opinion as OpinionModel;
use App\Data\Repositories\Opinions as OpinionsRepository;

use App\Data\Repositories\OpinionTypes as OpinionTypesRepository;
use App\Data\Repositories\OpinionScopes as OpinionScopesRepository;
use App\Data\Repositories\Users as UsersRepository;

use App\Http\Requests\Opinion as OpinionRequest;
use Illuminate\Http\Request;

class Opinions extends Controller
{
    /**
     * @var OpinionsRepository
     */
    private $repository;

    /**
     * Opinions constructor.
     *
     * @param OpinionsRepository $repository
     */
    public function __construct(OpinionsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return $this
     */
    public function create()
    {
        return view('opinions.form')->with([
            'opinion' => $this->repository->new()
        ]);
    }

    /**
     * @param OpinionRequest     $request
     * @param OpinionsRepository $repository
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(
        OpinionRequest $request,
        OpinionsRepository $repository
    ) {
        $repository->createFromRequest($request);

        return redirect()
            ->route('opinions.index')
            ->with($this->getSuccessMessage());
    }

    /**
     * @param OpinionsRepository $opinions
     * @param Request         $request
     *
     * @return $this|\Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(OpinionsRepository $opinions, Request $request)
    {
        return view('opinions.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with('opinions', $opinions->search($request))
            ->with('attributes', $opinions->attributesShowing())
            ->with('editAttribute', $opinions->editAttribute);
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function show($id)
    {
        $repository = app(OpinionsRepository::class);
        return view('opinions.form')
            ->with('formDisabled', true)
            ->with(['opinion' => OpinionModel::find($id)])
            ->with('formAttributes', $repository->formAttributes())
            ->with($this->getOpinionsData());
    }

    public function getOpinionsData(): array
    {
        return [
            'opinionTypes' =>
                app(OpinionTypesRepository::class)
                    ->allOrderBy('name')
                    ->pluck('name', 'id'),
            'opinionScopes' =>
                app(OpinionScopesRepository::class)
                    ->allOrderBy('name')
                    ->pluck('name', 'id'),
            'attorneys' =>
                app(UsersRepository::class)
                    ->getByType('Procurador')
                    ->pluck('name', 'id')
        ];
    }
}
