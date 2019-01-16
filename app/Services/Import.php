<?php

namespace App\Services;

use App\Data\Models\Processo;
use App\Data\Models\TipoUsuario as ModelTipoUsuario;
use App\Data\Models\User as ModelUser;
use App\Data\Repositories\Acoes;
use App\Data\Repositories\Juizes;
use App\Data\Repositories\Meios;
use App\Data\Repositories\Processos;
use App\Data\Repositories\TiposJuizes;
use App\Data\Repositories\Tribunais;
use App\Data\Repositories\Users;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class Import
{
    /**
     * @var Command
     */
    protected $command;

    /**
     * @var Tribunais
     */
    private $tribunaisRepository;

    /**
     * @var Acoes
     */
    private $acoesRepository;

    /**
     * @var TiposJuizes
     */
    private $tiposJuizesRepository;

    /**
     * @var Juizes
     */
    private $juizesRepository;

    /**
     * @var Meios
     */
    private $meiosRepository;

    /**
     * @var Users
     */
    private $usersRepository;

    /**
     * @var Processos
     */
    private $processosRepository;

    /**
     * Import constructor.
     *
     * @param Tribunais   $tribunaisRepository
     * @param Acoes       $acoesRepository
     * @param Processos   $processosRepository
     * @param TiposJuizes $tiposJuizesRepository
     * @param Juizes      $juizesRepository
     * @param Meios       $meiosRepository
     * @param Users       $usersRepository
     */
    public function __construct(
        Tribunais $tribunaisRepository,
        Acoes $acoesRepository,
        Processos $processosRepository,
        TiposJuizes $tiposJuizesRepository,
        Juizes $juizesRepository,
        Meios $meiosRepository,
        Users $usersRepository
    ) {
        $this->tribunaisRepository = $tribunaisRepository;

        $this->acoesRepository = $acoesRepository;

        $this->juizesRepository = $juizesRepository;

        $this->meiosRepository = $meiosRepository;

        $this->tiposJuizesRepository = $tiposJuizesRepository;

        $this->usersRepository = $usersRepository;

        $this->processosRepository = $processosRepository;
    }

    /**
     * @param $values
     *
     * @return mixed
     */
    private function cleanAndNormalize($values)
    {
        foreach ($values as $key => $value) {
            if (is_string($values[$key])) {
                // Remove double spaces
                $values[$key] = preg_replace('!\s+!', ' ', $values[$key]);

                // Trim everything
                $values[$key] = trim($values[$key]);

                // Remove some odd stuff
                if (starts_with($values[$key], ': ')) {
                    $values[$key] = substr($values[$key], 2);
                }
            }
        }

        return $values;
    }

    private function deleteAllRows()
    {
        $this->usersRepository->new()->truncate();

        $this->processosRepository->new()->truncate();

        $this->tribunaisRepository->new()->truncate();

        $this->acoesRepository->new()->truncate();

        $this->juizesRepository->new()->truncate();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function importExport()
    {
        return view('excel.importExport');
    }

    /**
     * @param $usersFile
     * @param $processesFile
     * @param $command
     */
    public function execute($usersFile, $processesFile, $command)
    {
        $this->command = $command;

        $this->deleteAllRows();

        $this->importUsers(realpath($usersFile));

        $this->importProcesses(realpath($processesFile));
    }

    /**
     * @param $file
     * @param Command $command
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function importProcesses($file)
    {
        if (!file_exists($file)) {
            $this->command->error("File does not exists $file");

            return;
        }

        $links = [];

        $this->command->info("Importing $file");

        $data = Excel::load($file, function ($reader) {
        });

        foreach ($data->sheet(0)->toArray() as $key => $row) {
            $links[
                trim(
                    $data
                        ->sheet(0)
                        ->getCell(($cell = 'A'.($key + 2)))
                        ->getValue()
                )
            ] = $data
                ->sheet(0)
                ->getCell($cell)
                ->getHyperlink()
                ->getUrl();
        }

        $data = $data->get();

        if (!empty($data) && $data->count()) {
            foreach ($data[0] as $key => $value) {
                if (
                    empty($value->no_judicial) or
                    starts_with($value->estagiario, 'RETIRAR')
                ) {
                    $this->command->line(
                        "{$value->no_judicial} - {$value->no_alerj} - {$value->estagiario}"
                    );
                    continue;
                }

                //$this->command->line("{$value->no_judicial} - $value->no_alerj");

                $value = $this->cleanAndNormalize($value);

                $obs = '';

                // ORIGEM e ORIGEM POR EXTENSO
                $tribunal = $this->tribunaisRepository->firstOrCreate(
                    ['abreviacao' => $this->upper($value->origem)],
                    [
                        'nome' => $this->upper(
                            $value->origem_por_extenso ?: 'N/C'
                        ),
                    ]
                );

                // AÇÃO - SIGLA e AÇÃO POR EXTENSO
                $acao = $this->acoesRepository->firstOrCreate(
                    ['abreviacao' => $this->upper($value->acao_sigla ?: 'N/C')],
                    ['nome' => $this->upper($value->acao_por_extenso ?: 'N/C')]
                );

                //TÍTULO DO RELATOR
                $tipo_relator = $this->tiposJuizesRepository->firstOrCreate([
                    'nome' => $value->titulo_do_relator ?: 'N/C',
                ]);

                $nome_relator = $this->ajustaNomeRelator($value->relator);
                $relator_juiz = $this->juizesRepository->firstOrCreate([
                    'nome'         => $this->upper($nome_relator ?: 'N/C'),
                    'lotacao_id'   => $tribunal->id,
                    'tipo_juiz_id' => $tipo_relator->id,
                ]);

                if (!is_null($value->procurador)) {
                    if (!is_null($this->buscaUsuario($value->procurador, 1))) {
                        $procurador = $this->buscaUsuario($value->procurador, 1)
                            ->id;
                    } else {
                        $procurador = null;
                        $obs =
                            $obs.'Procurador: '.$value->procurador.', ';
                    }
                } else {
                    $procurador = null;
                }

                if (!is_null($value->estagiario)) {
                    if (!is_null($this->buscaUsuario($value->estagiario, 2))) {
                        $estagiario = $this->buscaUsuario($value->estagiario, 2)
                            ->id;
                    } else {
                        $estagiario = null;
                        $obs =
                            $obs.'Estagiário: '.$value->estagiario.', ';
                        // $this->command->line("{$value->no_judicial} - $value->no_alerj - $obs");
                    }
                } else {
                    $estagiario = null;
                }

                if (!is_null($value->assessor)) {
                    if (!is_null($this->buscaUsuario($value->assessor, 3))) {
                        $assessor = $this->buscaUsuario($value->assessor, 3)
                            ->id;
                    } else {
                        $assessor = null;
                        $obs = $obs.'Assessor: '.$value->assessor.', ';
                        //$this->command->line("{$value->no_judicial} - $value->no_alerj - $obs");
                    }
                } else {
                    $assessor = null;
                }

                $tipo_meio = $this->ajustaTipoMeio($value->tipo);
                $tipo_meio = $this->meiosRepository->firstOrCreate([
                    'nome' => $tipo_meio,
                ]);

                $insert[] = [
                    'numero_judicial' => str_ireplace(
                        "\n",
                        '',
                        $value->no_judicial
                    ),
                    'numero_alerj' => str_ireplace("\n", '', $value->no_alerj),
                    'tribunal_id'  => str_ireplace("\n", '', $tribunal->id), //Origem
                    'vara'         => str_ireplace("\n", '', $value->orgao_julgador),
                    'acao_id'      => str_ireplace("\n", '', $acao->id),
                    'apensos_obs'  => str_ireplace("\n", '', $value->apensos),
                    $value->titulo_do_relator == 'JUIZ'
                        ? 'juiz_id'
                        : 'relator_id' => str_ireplace(
                        "\n",
                        '',
                        $relator_juiz->id
                    ),
                    'autor'         => str_ireplace("\n", '', $value->autor),
                    'reu'           => str_ireplace("\n", '', $value->reu),
                    'objeto'        => str_ireplace("\n", '', $value->objeto),
                    'merito'        => str_ireplace("\n", '', $value->merito),
                    'liminar'       => str_ireplace("\n", '', $value->liminar),
                    'recurso'       => str_ireplace("\n", '', $value->recurso),
                    'procurador_id' => $procurador,
                    'estagiario_id' => $estagiario,
                    'assessor_id'   => $assessor,
                    'tipo_meio_id'  => str_ireplace("\n", '', $tipo_meio->id),
                    'created_at'    => now(),
                    'updated_at'    => now(),
                    'observacao'    => str_ireplace("\n", '', $obs),
                    'link'          => isset($links[$value->no_judicial]) &&
                        !empty($links[$value->no_judicial])
                            ? $links[$value->no_judicial]
                            : null,
                ];
            }
            $colunas = [
                'numero_judicial' => 'numero_judicial',
                'numero_alerj'    => 'numero_alerj',
                'apensos_obs'     => 'apensos_obs',
                'vara'            => 'vara',
                'autor'           => 'autor',
                'reu'             => 'reu',
                'objeto'          => 'objeto',
                'merito'          => 'merito',
                'liminar'         => 'liminar',
                'recurso'         => 'recurso',
                'observacao'      => 'observacao',
            ];

            foreach ($insert as $k1 => $vinsert) {
                foreach ($colunas as $k2 => $v) {
                    if ($vinsert[$v] == '') {
                        $insert[$k1][$v] = 'N/C';
                    }
                }
            }
            if (!empty($insert)) {
                foreach ($insert as $k1 => $vinsert) {
                    Processo::insert($vinsert);
                }

                $this->command->info('PROCESSES: import was successful.');
            }
        }

        return back();
    }

    /**
     * @param $file
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function importUsers($file)
    {
        $this->command->info("Importing $file");

        if ($file) {
            $data = Cache::remember('importUsers', 5, function () use ($file) {
                return Excel::load($file, function ($reader) {
                })->get();
            });

            if (!empty($data) && $data->count()) {
                foreach ($data as $key => $value) {
                    list($name, $username, $user_type) = explode(
                        ';',
                        $value['nameusernameuser_type']
                    );
                    $user_type = $this->ajustaTipoUsuario($user_type)->id;
                    if (!empty($name)) {
                        ModelUser::create([
                            'name'         => $this->removerAcentuacao($name),
                            'password'     => '-',
                            'username'     => $username,
                            'email'        => $username.'@alerj.rj.gov.br',
                            'user_type_id' => $user_type,
                        ]);
                    }
                }

                $this->command->info('USERS: import was successful.');
            }
        }

        return back();
    }

    /**
     * @param $user
     * @param $type
     *
     * @return mixed
     */
    private function buscaUsuario($user, $type)
    {
        //Does not work with duplicate users
        $search = collect(explode(' ', $user))->map(function ($item) {
            return removerAcentuacao(mb_strtolower($item));
        });

        foreach ($search as $word) {
            if ($word == 'dr') {
                continue;
            }

            $q = ModelUser::whereRaw(
                "lower(name) like '%".$this->removerAcentuacao($word)."%'"
            )
                ->whereRaw("user_type_id = {$type}")
                ->get()
                ->first();
            //DB::listen(function($q) { dump($q->sql); dump($q->bindings); });

            if (!is_null($q)) {
                //dump($q->name . ' -> ' . $word);
                return $q;
            }
        }
    }

    /**
     * @param $tipo_user
     *
     * @return mixed
     */
    private function ajustaTipoUsuario($tipo_user)
    {
        $tipo_user = mb_strtolower(trim($tipo_user));

        return ModelTipoUsuario::whereRaw("lower(nome) like '%{$tipo_user}%'")
            ->get()
            ->first();
    }

    /**
     * @param $relator
     *
     * @return null|string|string[]
     */
    private function ajustaNomeRelator($relator)
    {
        if (!is_null($relator)) {
            $relator = strtoupper($relator);

            $relator = preg_replace('/MINISTRO/', '', $relator, 1);
            $relator = preg_replace('/MIN /', '', $relator, 1);
            $relator = preg_replace('/DES /', '', $relator, 1);
            $relator = preg_replace('/MIN./', '', $relator, 1);
            $relator = preg_replace('/DES./', '', $relator, 1);
            $relator = preg_replace('/JUIZ/', '', $relator, 1);
            $relator = preg_replace('/JUIZA/', '', $relator, 1);
            $relator = preg_replace('/JUÍZA/', '', $relator, 1);
            $relator = preg_replace('/JUíZA/', '', $relator, 1);
            $relator = preg_replace('/DRA/', '', $relator, 1);
            $relator = preg_replace('/RELATOR/', '', $relator, 1);

            $relator = str_ireplace('.', '', $relator);
            $relator = str_ireplace(':', '', $relator);
            $relator = str_ireplace('-', '', $relator);
            $relator = str_ireplace('_', '', $relator);
            $relator = str_ireplace('__', '', $relator);
            $relator = str_ireplace('____', '', $relator);
            $relator = str_ireplace('  ', ' ', $relator);
            $relator = str_ireplace("\n", '', $relator);

            $relator = removerAcentuacao($relator);
            $relator = strtoupper(trim($relator));

            if (is_null($relator)) {
                $relator = 'N/C';
            }
        } else {
            $relator = 'N/C';
        }

        return $relator;
    }

    /**
     * @param $relator
     *
     * @return mixed|null|string|string[]
     */
    private function ajustaTipoRelator($relator)
    {
        $tipo_relator = mb_strtolower(trim($relator));
        if (starts_with($tipo_relator, 'mi')) {
            $tipo_relator = 'Ministro';
        } elseif (starts_with($tipo_relator, 'de')) {
            $tipo_relator = 'Desembargador';
        } elseif (starts_with($tipo_relator, 'ju')) {
            $tipo_relator = 'Juiz';
        } else {
            $tipo_relator = 'N/C';
        }

        return $tipo_relator;
    }

    /**
     * @param $tipo_meio
     *
     * @return mixed|null|string|string[]
     */
    private function ajustaTipoMeio($tipo_meio)
    {
        $tipo_meio = mb_strtolower(trim($tipo_meio));
        if (starts_with(trim($tipo_meio), 'f')) {
            $tipo_meio = 'Físico';
        } elseif (starts_with(trim($tipo_meio), 'e')) {
            $tipo_meio = 'Eletrônico';
        } else {
            $tipo_meio = 'N/C';
        }

        return $tipo_meio;
    }

    /**
     * @param $string
     *
     * @return mixed|null|string|string[]
     */
    private function upper($string)
    {
        return mb_strtoupper($string);
    }
}
