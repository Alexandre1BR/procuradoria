<?php
namespace App\Http\Controllers;

use App\Data\Repositories\Leis as LeisRepository;
use App\Data\Repositories\NiveisFederativos as NiveisFederativosRepository;
use App\Data\Repositories\ProcessosLeis as ProcessosLeisRepository;
use App\Data\Repositories\TiposLeis as TiposLeisRepository;
use App\Http\Requests\Lei as LeiRequest;
use App\Http\Requests\ProcessoLei as ProcessoLeiRequest;
use Illuminate\Http\Request;

class Leis extends Controller
{
    private $repository;

    public function __construct(LeisRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create($processo_id = null)
    {
        return view('leis.form')
            ->with('processo_id', $processo_id)
            ->with(['lei' => $this->repository->new()])
            ->with($this->getLeisData());
    }

    public function store(LeiRequest $request, LeisRepository $repository)
    {
        //        dd($request->all());

        $novaLei = $repository->createFromRequest($request);

        $processoLeiRequest = new ProcessoLeiRequest();

        //        dd($processoLeiRequest);

        if (isset($request->processo_id)) {
            $processoLeirepository = app(ProcessosLeisRepository::class);

            $processoLeiRequest->setMethod('POST');
            $processoLeiRequest->request->add([
                'processo_id' => $request->processo_id
            ]);
            $processoLeiRequest->request->add(['lei_id' => $novaLei->id]);

            $processoLeirepository->createFromRequest($processoLeiRequest);

            return redirect()
                ->route('processos.show', ['id' => $request->processo_id])
                ->with($this->getSuccessMessage());
        } else {
            return redirect()
                ->route('leis.index')
                ->with($this->getSuccessMessage());
        }
    }

    public function index(LeisRepository $leis, Request $request)
    {
        return $request->expectsJson()
            ? $leis->search($request)
            : view('leis.index')
                ->with('pesquisa', $request->get('pesquisa'))
                ->with('leis', $leis->search($request));
    }

    public function show($id)
    {
        return view('leis.form')
            ->with('formDisabled', true)
            ->with(['lei' => app(LeisRepository::class)->findById($id)])
            ->with($this->getLeisData());
    }

    public function getLeisData(): array
    {
        return [
            'niveisFederativos' =>
                app(NiveisFederativosRepository::class)
                    ->allOrderBy('nome')
                    ->pluck('nome', 'id'),
            'tiposLeis' =>
                app(TiposLeisRepository::class)
                    ->allOrderBy('nome')
                    ->pluck('nome', 'id')
        ];
    }
}
