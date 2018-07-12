<?php
namespace App\Http\Controllers;

use App\Data\Models\Opinion as OpinionModel;
use App\Data\Models\OpinionsSubject;
use App\Data\Models\User;
use App\Data\Repositories\Opinions as OpinionsRepository;
use App\Data\Repositories\OpinionScopes as OpinionScopesRepository;
use App\Data\Repositories\OpinionsSubjects as OpinionsSubjectsRepository;
use App\Data\Repositories\OpinionSubjects as OpinionSubjectsRepository;
use App\Data\Repositories\OpinionTypes as OpinionTypesRepository;
use App\Data\Repositories\Users as UsersRepository;
use App\Http\Requests\Opinion as OpinionRequest;
use App\Http\Requests\OpinionsSubject as OpinionsSubjectRequest;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

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
        return view('opinions.form')
            ->with(['opinion' => $this->repository->new()])
            ->with(
                'opinionsFormAttributes',
                $this->repository->createFormAttributes()
            )
            ->with($this->getOpinionsData());
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
        foreach ($request->allFiles() as $key => $file) {
            $extension = $file->getClientOriginalExtension();

            $base64Content = base64_encode(
                file_get_contents($file->getPathName())
            );

            $request->merge(['file_' . $extension => $base64Content]);
            //            $date = $newOpinion->date;
            //            $fileName = $date . '-' . $newOpinion->id . '.' . $extension;
            //            $file->storeAs('', $fileName, 'opinion-files');
        }

        //        dd($request);

        $newOpinion = $repository->createFromRequest($request);

        return redirect()
            ->route('opinions.show', ['id' => $newOpinion->id])
            ->with('formDisabled', false)
            ->with(
                $this->getSuccessMessage(
                    'Gravado com sucesso. Insira os assuntos correspondentes.'
                )
            );
    }

    public function download($id, $fileExtension)
    {
        if (!Auth::user()->is_procurador) {
            return view('home.index');
        }

        $mime = '';
        $attributeName = '';
        $currentOpinion = OpinionModel::find($id);

        if ($fileExtension == 'pdf') {
            $mime = 'application/pdf';
            $attributeName = 'file_pdf';
        } elseif ($fileExtension == 'doc') {
            $mime = 'application/msword';
            $attributeName = 'file_doc';
        }

        $fileName = (
            $currentOpinion->date .
                '-' .
                $currentOpinion->id .
                '.' .
                $fileExtension
        );

        $response = response(
            base64_decode($currentOpinion->{$attributeName}),
            200,
            [
                'Content-Type' => $mime,
                'Content-Disposition' =>
                    'attachment; filename="' . $fileName . '"'
            ]
        );
        return $response;
    }

    /**
     * @param OpinionsRepository $opinions
     * @param Request            $request
     *
     * @return $this|\Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        return view('opinions.index')
            ->with('pesquisa', $request->get('pesquisa'))
            ->with('opinions', $this->repository->search($request))
            ->with('isProcurador', $user->is_procurador)
            ->with('opinionsAttributes', $this->repository->attributesShowing())
            ->with('opinionEditAttribute', $this->repository->editAttribute);
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function show($id)
    {
        $user = Auth::user();

        $repository = app(OpinionsRepository::class);
        $opinionSubjectsRepository = app(OpinionSubjectsRepository::class);

        return view('opinions.form')
            ->with('formDisabled', true)
            ->with(['opinion' => OpinionModel::find($id)])
            ->with('isProcurador', $user->is_procurador)
            ->with(
                'opinionsFormAttributes',
                $repository->showFormAttributes($user->is_procurador)
            )
            ->with(
                'opinionSubjectsAttributes',
                $opinionSubjectsRepository->attributesShowing()
            )
            ->with(
                'opinionSubjectsEditAttribute',
                $opinionSubjectsRepository->editAttribute
            )
            ->with($this->getOpinionsData($id));
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function relacionarAssunto(
        OpinionsSubjectRequest $request,
        OpinionsSubjectsRepository $repository
    ) {
        $repository->createFromRequest($request);

        return redirect()
            ->route('opinions.show', $request->opinion_id)
            ->with($this->getSuccessMessage());
    }

    public function getOpinionsData($id = null)
    {
        if ($id == null) {
            $opinionSubjects = app(
                OpinionSubjectsRepository::class
            )->allOrderBy('name');
        } else {
            $query = OpinionsSubject::where('opinion_id', $id)->get();
            $opinionSubjects = [];
            foreach ($query as $item) {
                $opinionSubjects[] = $item->subject;
            }
        }

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
                    ->pluck('name', 'id'),
            'opinionSubjects' => $opinionSubjects,
            'allOpinionSubjects' =>
                app(OpinionSubjectsRepository::class)->allOrderBy('name')
        ];
    }
}
