<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\Models\Processo;
use App\Data\Repositories\Processos as ProcessosRepository;
use App\Http\Requests\Processo as ProcessoRequest;
use App\Data\Models\Processo as ProcessoModel;
use App\Data\Repositories\Andamentos as AndamentosRepository;
use App\Data\Repositories\Apensos as ApensosRepository;
use App\Data\Repositories\ProcessosLeis as ProcessosLeisRepository;
use App\Data\Scope\Processo as ProcessoScope;
use App\Http\Requests\Apenso as ApensoRequest;
use App\Http\Requests\ProcessoLei as ProcessoLeiRequest;

class Processos extends Controller
{
    /**
     * @var ProcessosRepository
     */
    private $processosRepository;

    /**
     * Processos constructor.
     *
     * @param ProcessosRepository $repository
     */
    public function __construct(ProcessosRepository $repository)
    {
        $this->processosRepository = $repository;
    }

    /**
     * @return $this
     */
    public function create()
    {
        return view('processos.form')
            ->with($this->processosRepository->getProcessosData())
            ->with(['processo' => $this->processosRepository->new()]);
    }

    /**
     * @param ProcessoRequest     $request
     * @param ProcessosRepository $repository
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(
        ProcessoRequest $request,
        ProcessosRepository $repository
    ) {
        $p = $repository->createFromRequest($request);

        $a = new AndamentosRepository();
        $a->createFromProcessos($request, $p);

        return redirect()
            ->route('home.index')
            ->with($this->getSuccessMessage());
    }

    /**
     * @param ApensoRequest     $request
     * @param ApensosRepository $repository
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function apensar(
        ApensoRequest $request,
        ApensosRepository $repository
    ) {
        $repository->createFromRequest($request);

        return redirect()
            ->route('processos.show', $request->processo_id)
            ->with('processo', ProcessoModel::find($request->processo_id))
            ->with('formDisabled', true)
            ->with(
                $this->processosRepository->getProcessosData(
                    $request->processo_id
                )
            )
            ->with($this->getSuccessMessage());
    }

    /**
     * @param ProcessoLeiRequest      $request
     * @param ProcessosLeisRepository $repository
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function relacionarLei(
        ProcessoLeiRequest $request,
        ProcessosLeisRepository $repository
    ) {
        $repository->createFromRequest($request);

        return redirect()
            ->route('processos.show', $request->processo_id)
            ->with('processo', ProcessoModel::find($request->processo_id))
            ->with('formDisabled', true)
            ->with(
                $this->processosRepository->getProcessosData(
                    $request->processo_id
                )
            )
            ->with($this->getSuccessMessage());
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        return view('processos.form')
            ->with(
                'processo',
                ProcessoModel
                    ::withoutGlobalScope(ProcessoScope::class)
                    ->find($id)
            )
            ->with('formDisabled', true)
            ->with($this->processosRepository->getProcessosData($id));
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $request->expectsJson()
            ? $this->processosRepository->filter($request)
            : $this->buildView($request);
    }

    /**
     * @param Request $request
     * @return $this
     */
    private function buildView(Request $request)
    {
        return view('home.index')
            ->with('pesquisa', $request->get('search'))
            ->with(
                'processos_arquivados_incluidos',
                $request->get('processos_arquivados_incluidos')
            )
            ->with(
                'processos_arquivados_apenas',
                $request->get('processos_arquivados_apenas')
            )
            ->with('processo', new Processo());
    }
}
