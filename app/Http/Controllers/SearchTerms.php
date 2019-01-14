<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\Models\SearchTerm;
use App\Http\Requests\SearchTerm as SearchTermRequest;
use App\Data\Repositories\SearchTerms as SearchTermsRepository;

class SearchTerms extends Controller
{
    /**
     * @var SearchTermsRepository
     */
    private $repository;

    /**
     * SearchTerms constructor.
     *
     * @param SearchTermsRepository $repository
     */
    public function __construct(SearchTermsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param SearchTermsRepository $searchTermsRepository
     * @param Request             $request
     *
     * @return $this|mixed
     */
    public function index(
        SearchTermsRepository $searchTermsRepository,
        Request $request
    ) {
        return $request->expectsJson()
            ? $searchTermsRepository->search($request)
            : view('search_terms.index')
                ->with('pesquisa', $request->get('pesquisa'))
                ->with('searchTerms', $searchTermsRepository->search($request));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('search_terms.form')->with([
            'searchTerm' => $this->repository->new(),
        ]);
    }

    /**
     * @param SearchTermRequest     $request
     * @param SearchTermsRepository $repository
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(
        SearchTermRequest $request,
        SearchTermsRepository $repository
    ) {
        $repository->createFromRequest($request);

        return redirect()
            ->route('search_terms.index')
            ->with($this->getSuccessMessage());
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        return view('search_terms.form')
            ->with('searchTerm', SearchTerm::find($id))
            ->with('formDisabled', true);
    }
}
