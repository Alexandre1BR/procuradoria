<?php
namespace App\Http\Controllers;

use App\Data\Models\OpinionSubject as OpinionSubjectModel;
use App\Data\Repositories\OpinionSubjects as OpinionSubjectsRepository;
use App\Http\Requests\OpinionSubject as OpinionSubjectRequest;
use Illuminate\Http\Request;

class OpinionSubjects extends Controller
{
    /**
     * @var OpinionSubjectsRepository
     */
    private $repository;

    /**
     * OpinionSubjects constructor.
     *
     * @param OpinionSubjectsRepository $repository
     */
    public function __construct(OpinionSubjectsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return $this
     */
    public function create()
    {
        return view('opinionSubjects.form')
            ->with(['opinionSubject' => $this->repository->new()])
            ->with(
                'opinionSubjectsFormAttributes',
                $this->repository->formAttributes()
            );
    }

    /**
     * @param OpinionSubjectRequest     $request
     * @param OpinionSubjectsRepository $repository
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(
        OpinionSubjectRequest $request,
        OpinionSubjectsRepository $repository
    ) {
        $repository->createFromRequest($request);

        return redirect()
            ->route('opinionSubjects.index')
            ->with($this->getSuccessMessage());
    }

    /**
     * @param OpinionSubjectsRepository $opinionSubjects
     * @param Request                   $request
     *
     * @return $this|\Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(
        OpinionSubjectsRepository $opinionSubjects,
        Request $request
    ) {
        return view('opinionSubjects.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with('opinionSubjects', $opinionSubjects->search($request))
            ->with(
                'opinionSubjectsAttributes',
                $opinionSubjects->attributesShowing()
            )
            ->with(
                'opinionSubjectsEditAttribute',
                $opinionSubjects->editAttribute
            );
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function show($id)
    {
        $repository = app(OpinionSubjectsRepository::class);

        return view('opinionSubjects.form')
            ->with('formDisabled', true)
            ->with(['opinionSubject' => OpinionSubjectModel::find($id)])
            ->with(
                'opinionSubjectsFormAttributes',
                $repository->formAttributes()
            );
    }
}
