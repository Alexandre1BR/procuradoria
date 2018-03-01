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

    public function importExport()
    {
        return view('excel.importExport');
    }

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

        $this->command->info("Importing $file");

        Cache::flush();
        $data = Cache::remember('importExcel', 1, function () use ($file) {
            return Excel::load($file, function ($reader) {
            })->get();
        });

//        // Loop through all sheets
//        $data->each(function($sheet) {
//
//            // Loop through all rows
//            $sheet->each(function($row) {
//                dump($row);
//            });
//
//        });

        if (!empty($data) && $data->count()) {
            foreach ($data[0] as $key => $value) {
                if (empty($value->no_judicial) or starts_with($value->estagiario, 'RETIRAR')) {
                    $this->command->line("{$value->no_judicial} - $value->no_alerj - $value->estagiario");
                    continue;
                }

                //$this->command->line("{$value->no_judicial} - $value->no_alerj");

                $value = $this->cleanAndNormalize($value);

                $obs = '';

                // ORIGEM e ORIGEM POR EXTENSO
                $tribunal = $this->tribunaisRepository
                    ->firstOrCreate([
                        'abreviacao' => $this->upper($value->origem),
                    ], [
                        'nome'       => $this->upper($value->origem_por_extenso ?: 'N/C'),
                    ]);

                // AÇÃO - SIGLA e AÇÃO POR EXTENSO
                $acao = $this->acoesRepository
                    ->firstOrCreate([
                        'abreviacao' => $this->upper($value->acao_sigla ?: 'N/C'),
                    ], [
                        'nome'       => $this->upper($value->acao_por_extenso ?: 'N/C'),
                    ]);


                //TÍTULO DO RELATOR
                $tipo_relator = $this->tiposJuizesRepository->firstOrCreate(['nome' => $value->titulo_do_relator ?: 'N/C']);

                $nome_relator = $this->ajustaNomeRelator($value->relator);
                $relator_juiz = $this->juizesRepository
                    ->firstOrCreate([
                        'nome'         => $this->upper($nome_relator ?: 'N/C'),
                        'lotacao_id'   => $tribunal->id,
                        'tipo_juiz_id' => $tipo_relator->id,
                    ]);

                if (!is_null($value->procurador)) {
                    if (!is_null($this->buscaUsuario($value->procurador, 1))) {
                        $procurador = $this->buscaUsuario($value->procurador, 1)->id;
                    } else {
                        $procurador = null;
                        $obs = $obs.'Procurador: '.$value->procurador.', ';
                    }
                } else {
                    $procurador = null;
                }

                if (!is_null($value->estagiario)) {
                    if (!is_null($this->buscaUsuario($value->estagiario, 2))) {
                        $estagiario = $this->buscaUsuario($value->estagiario, 2)->id;
                    } else {
                        $estagiario = null;
                        $obs = $obs.'Estagiário: '.$value->estagiario.', ';
                       // $this->command->line("{$value->no_judicial} - $value->no_alerj - $obs");
                    }
                } else {
                    $estagiario = null;
                }

                if (!is_null($value->assessor)) {
                    if (!is_null($this->buscaUsuario($value->assessor, 3))) {
                        $assessor = $this->buscaUsuario($value->assessor, 3)->id;
                    } else {
                        $assessor = null;
                        $obs = $obs.'Assessor: '.$value->assessor.', ';
                        //$this->command->line("{$value->no_judicial} - $value->no_alerj - $obs");
                    }
                } else {
                    $assessor = null;
                }

                $tipo_meio = $this->ajustaTipoMeio($value->tipo);
                $tipo_meio = $this->meiosRepository->firstOrCreate(['nome' => $tipo_meio]);

                $insert[] =
                    [
                        'numero_judicial' => str_ireplace("\n", '', $value->no_judicial),
                        'numero_alerj'    => str_ireplace("\n", '', $value->no_alerj),
                        'tribunal_id'     => str_ireplace("\n", '', $tribunal->id), //Origem
                        'vara'            => str_ireplace("\n", '', $value->orgao_julgador),
                        'acao_id'         => str_ireplace("\n", '', $acao->id),
                        'apensos_obs'     => str_ireplace("\n", '', $value->apensos),
                        (($value->titulo_do_relator == 'JUIZ') ? 'juiz_id' : 'relator_id') => str_ireplace("\n", '', $relator_juiz->id),
                        'autor'                                                            => str_ireplace("\n", '', $value->autor),
                        'reu'                                                              => str_ireplace("\n", '', $value->reu),
                        'objeto'                                                           => str_ireplace("\n", '', $value->objeto),
                        'merito'                                                           => str_ireplace("\n", '', $value->merito),
                        'liminar'                                                          => str_ireplace("\n", '', $value->liminar),
                        'recurso'                                                          => str_ireplace("\n", '', $value->recurso),
                        'procurador_id'                                                    => $procurador,
                        'estagiario_id'                                                    => $estagiario,
                        'assessor_id'                                                      => $assessor,
                        'tipo_meio_id'                                                     => str_ireplace("\n", '', $tipo_meio->id),
                        'created_at'                                                       => now(),
                        'updated_at'                                                       => now(),
                        'observacao'                                                       => str_ireplace("\n", '', $obs),
                    ];
            }
            $colunas =
                [
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
                    list($name, $username, $user_type) = explode(';', $value['nameusernameuser_type']);
                    $user_type = $this->ajustaTipoUsuario($user_type)->id;
                    if (!empty($name)) {
                        ModelUser::create(
                            [
                                'name'         => $this->removerAcentuacao($name),
                                'password'     => '-',
                                'username'     => $username,
                                'email'        => $username.'@alerj.rj.gov.br',
                                'user_type_id' => $user_type,
                            ]
                        );
                    }
                }

                $this->command->info('USERS: import was successful.');
            }
        }

        return back();
    }

    private function buscaUsuario($user, $type)
    {
        //Does not work with duplicate users
        $search = collect(explode(' ', $user))->map(function ($item) {
            return $this->removerAcentuacao(mb_strtolower($item));
        });

        foreach ($search as $word) {
            if ($word == 'dr') {
                continue;
            }

            $q = ModelUser::whereRaw("lower(name) like '%".$this->removerAcentuacao($word)."%'")->whereRaw("user_type_id = {$type}")->get()->first();
            //DB::listen(function($q) { dump($q->sql); dump($q->bindings); });

            if (!is_null($q)) {
                //dump($q->name . ' -> ' . $word);
                return $q;
            }
        }
    }

    private function ajustaTipoUsuario($tipo_user)
    {
        $tipo_user = mb_strtolower(trim($tipo_user));

        return ModelTipoUsuario::whereRaw("lower(nome) like '%{$tipo_user}%'")->get()->first();
    }

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

            $relator = $this->removerAcentuacao($relator);
            $relator = strtoupper(trim($relator));

            if (is_null($relator)) {
                $relator = 'N/C';
            }
        } else {
            $relator = 'N/C';
        }

        return $relator;
    }

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

    private function removerAcentuacao($str, $utf8 = true)
    {
        try {
            iconv('UTF-8', 'ISO-8859-1//TRANSLIT', (string) $str);
        } catch (\Exception $e) {
            $this->command->error("Char error: $str");

            $str = iconv('UTF-8', 'ASCII//IGNORE', (string) $str);

            $this->command->error("Char error fixed: $str");
        }

        if (is_null($utf8)) {
            if (!function_exists('mb_detect_encoding')) {
                $utf8 = (mb_strtolower(mb_detect_encoding($str)) == 'utf-8');
            } else {
                $length = strlen($str);
                $utf8 = true;
                for ($i = 0; $i < $length; $i++) {
                    $c = ord($str[$i]);
                    if ($c < 0x80) {
                        $n = 0;
                    } // 0bbbbbbb
                    elseif (($c & 0xE0) == 0xC0) {
                        $n = 1;
                    } // 110bbbbb
                    elseif (($c & 0xF0) == 0xE0) {
                        $n = 2;
                    } // 1110bbbb
                    elseif (($c & 0xF8) == 0xF0) {
                        $n = 3;
                    } // 11110bbb
                    elseif (($c & 0xFC) == 0xF8) {
                        $n = 4;
                    } // 111110bb
                    elseif (($c & 0xFE) == 0xFC) {
                        $n = 5;
                    } // 1111110b
                    else {
                        return false;
                    } // Does not match any model
                    for ($j = 0; $j < $n; $j++) { // n bytes matching 10bbbbbb follow ?
                        if ((++$i == $length)
                            || ((ord($str[$i]) & 0xC0) != 0x80)) {
                            $utf8 = false;
                            break;
                        }
                    }
                }
            }
        }

        if (!$utf8) {
            $str = utf8_encode($str);
        }
        $transliteration = [
            'Ĳ' => 'I', 'Ö' => 'O', 'Œ' => 'O', 'Ü' => 'U', 'ä' => 'a', 'æ' => 'a',
            'ĳ' => 'i', 'ö' => 'o', 'œ' => 'o', 'ü' => 'u', 'ß' => 's', 'ſ' => 's',
            'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A',
            'Æ' => 'A', 'Ā' => 'A', 'Ą' => 'A', 'Ă' => 'A', 'Ç' => 'C', 'Ć' => 'C',
            'Č' => 'C', 'Ĉ' => 'C', 'Ċ' => 'C', 'Ď' => 'D', 'Đ' => 'D', 'È' => 'E',
            'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ē' => 'E', 'Ę' => 'E', 'Ě' => 'E',
            'Ĕ' => 'E', 'Ė' => 'E', 'Ĝ' => 'G', 'Ğ' => 'G', 'Ġ' => 'G', 'Ģ' => 'G',
            'Ĥ' => 'H', 'Ħ' => 'H', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
            'Ī' => 'I', 'Ĩ' => 'I', 'Ĭ' => 'I', 'Į' => 'I', 'İ' => 'I', 'Ĵ' => 'J',
            'Ķ' => 'K', 'Ľ' => 'K', 'Ĺ' => 'K', 'Ļ' => 'K', 'Ŀ' => 'K', 'Ł' => 'L',
            'Ñ' => 'N', 'Ń' => 'N', 'Ň' => 'N', 'Ņ' => 'N', 'Ŋ' => 'N', 'Ò' => 'O',
            'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ø' => 'O', 'Ō' => 'O', 'Ő' => 'O',
            'Ŏ' => 'O', 'Ŕ' => 'R', 'Ř' => 'R', 'Ŗ' => 'R', 'Ś' => 'S', 'Ş' => 'S',
            'Ŝ' => 'S', 'Ș' => 'S', 'Š' => 'S', 'Ť' => 'T', 'Ţ' => 'T', 'Ŧ' => 'T',
            'Ț' => 'T', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ū' => 'U', 'Ů' => 'U',
            'Ű' => 'U', 'Ŭ' => 'U', 'Ũ' => 'U', 'Ų' => 'U', 'Ŵ' => 'W', 'Ŷ' => 'Y',
            'Ÿ' => 'Y', 'Ý' => 'Y', 'Ź' => 'Z', 'Ż' => 'Z', 'Ž' => 'Z', 'à' => 'a',
            'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ā' => 'a', 'ą' => 'a', 'ă' => 'a',
            'å' => 'a', 'ç' => 'c', 'ć' => 'c', 'č' => 'c', 'ĉ' => 'c', 'ċ' => 'c',
            'ď' => 'd', 'đ' => 'd', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e',
            'ē' => 'e', 'ę' => 'e', 'ě' => 'e', 'ĕ' => 'e', 'ė' => 'e', 'ƒ' => 'f',
            'ĝ' => 'g', 'ğ' => 'g', 'ġ' => 'g', 'ģ' => 'g', 'ĥ' => 'h', 'ħ' => 'h',
            'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ī' => 'i', 'ĩ' => 'i',
            'ĭ' => 'i', 'į' => 'i', 'ı' => 'i', 'ĵ' => 'j', 'ķ' => 'k', 'ĸ' => 'k',
            'ł' => 'l', 'ľ' => 'l', 'ĺ' => 'l', 'ļ' => 'l', 'ŀ' => 'l', 'ñ' => 'n',
            'ń' => 'n', 'ň' => 'n', 'ņ' => 'n', 'ŉ' => 'n', 'ŋ' => 'n', 'ò' => 'o',
            'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ø' => 'o', 'ō' => 'o', 'ő' => 'o',
            'ŏ' => 'o', 'ŕ' => 'r', 'ř' => 'r', 'ŗ' => 'r', 'ś' => 's', 'š' => 's',
            'ť' => 't', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ū' => 'u', 'ů' => 'u',
            'ű' => 'u', 'ŭ' => 'u', 'ũ' => 'u', 'ų' => 'u', 'ŵ' => 'w', 'ÿ' => 'y',
            'ý' => 'y', 'ŷ' => 'y', 'ż' => 'z', 'ź' => 'z', 'ž' => 'z', 'Α' => 'A',
            'Ά' => 'A', 'Ἀ' => 'A', 'Ἁ' => 'A', 'Ἂ' => 'A', 'Ἃ' => 'A', 'Ἄ' => 'A',
            'Ἅ' => 'A', 'Ἆ' => 'A', 'Ἇ' => 'A', 'ᾈ' => 'A', 'ᾉ' => 'A', 'ᾊ' => 'A',
            'ᾋ' => 'A', 'ᾌ' => 'A', 'ᾍ' => 'A', 'ᾎ' => 'A', 'ᾏ' => 'A', 'Ᾰ' => 'A',
            'Ᾱ' => 'A', 'Ὰ' => 'A', 'ᾼ' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D',
            'Ε' => 'E', 'Έ' => 'E', 'Ἐ' => 'E', 'Ἑ' => 'E', 'Ἒ' => 'E', 'Ἓ' => 'E',
            'Ἔ' => 'E', 'Ἕ' => 'E', 'Ὲ' => 'E', 'Ζ' => 'Z', 'Η' => 'I', 'Ή' => 'I',
            'Ἠ' => 'I', 'Ἡ' => 'I', 'Ἢ' => 'I', 'Ἣ' => 'I', 'Ἤ' => 'I', 'Ἥ' => 'I',
            'Ἦ' => 'I', 'Ἧ' => 'I', 'ᾘ' => 'I', 'ᾙ' => 'I', 'ᾚ' => 'I', 'ᾛ' => 'I',
            'ᾜ' => 'I', 'ᾝ' => 'I', 'ᾞ' => 'I', 'ᾟ' => 'I', 'Ὴ' => 'I', 'ῌ' => 'I',
            'Θ' => 'T', 'Ι' => 'I', 'Ί' => 'I', 'Ϊ' => 'I', 'Ἰ' => 'I', 'Ἱ' => 'I',
            'Ἲ' => 'I', 'Ἳ' => 'I', 'Ἴ' => 'I', 'Ἵ' => 'I', 'Ἶ' => 'I', 'Ἷ' => 'I',
            'Ῐ' => 'I', 'Ῑ' => 'I', 'Ὶ' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M',
            'Ν' => 'N', 'Ξ' => 'K', 'Ο' => 'O', 'Ό' => 'O', 'Ὀ' => 'O', 'Ὁ' => 'O',
            'Ὂ' => 'O', 'Ὃ' => 'O', 'Ὄ' => 'O', 'Ὅ' => 'O', 'Ὸ' => 'O', 'Π' => 'P',
            'Ρ' => 'R', 'Ῥ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Ύ' => 'Y',
            'Ϋ' => 'Y', 'Ὑ' => 'Y', 'Ὓ' => 'Y', 'Ὕ' => 'Y', 'Ὗ' => 'Y', 'Ῠ' => 'Y',
            'Ῡ' => 'Y', 'Ὺ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'P', 'Ω' => 'O',
            'Ώ' => 'O', 'Ὠ' => 'O', 'Ὡ' => 'O', 'Ὢ' => 'O', 'Ὣ' => 'O', 'Ὤ' => 'O',
            'Ὥ' => 'O', 'Ὦ' => 'O', 'Ὧ' => 'O', 'ᾨ' => 'O', 'ᾩ' => 'O', 'ᾪ' => 'O',
            'ᾫ' => 'O', 'ᾬ' => 'O', 'ᾭ' => 'O', 'ᾮ' => 'O', 'ᾯ' => 'O', 'Ὼ' => 'O',
            'ῼ' => 'O', 'α' => 'a', 'ά' => 'a', 'ἀ' => 'a', 'ἁ' => 'a', 'ἂ' => 'a',
            'ἃ' => 'a', 'ἄ' => 'a', 'ἅ' => 'a', 'ἆ' => 'a', 'ἇ' => 'a', 'ᾀ' => 'a',
            'ᾁ' => 'a', 'ᾂ' => 'a', 'ᾃ' => 'a', 'ᾄ' => 'a', 'ᾅ' => 'a', 'ᾆ' => 'a',
            'ᾇ' => 'a', 'ὰ' => 'a', 'ᾰ' => 'a', 'ᾱ' => 'a', 'ᾲ' => 'a', 'ᾳ' => 'a',
            'ᾴ' => 'a', 'ᾶ' => 'a', 'ᾷ' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd',
            'ε' => 'e', 'έ' => 'e', 'ἐ' => 'e', 'ἑ' => 'e', 'ἒ' => 'e', 'ἓ' => 'e',
            'ἔ' => 'e', 'ἕ' => 'e', 'ὲ' => 'e', 'ζ' => 'z', 'η' => 'i', 'ή' => 'i',
            'ἠ' => 'i', 'ἡ' => 'i', 'ἢ' => 'i', 'ἣ' => 'i', 'ἤ' => 'i', 'ἥ' => 'i',
            'ἦ' => 'i', 'ἧ' => 'i', 'ᾐ' => 'i', 'ᾑ' => 'i', 'ᾒ' => 'i', 'ᾓ' => 'i',
            'ᾔ' => 'i', 'ᾕ' => 'i', 'ᾖ' => 'i', 'ᾗ' => 'i', 'ὴ' => 'i', 'ῂ' => 'i',
            'ῃ' => 'i', 'ῄ' => 'i', 'ῆ' => 'i', 'ῇ' => 'i', 'θ' => 't', 'ι' => 'i',
            'ί' => 'i', 'ϊ' => 'i', 'ΐ' => 'i', 'ἰ' => 'i', 'ἱ' => 'i', 'ἲ' => 'i',
            'ἳ' => 'i', 'ἴ' => 'i', 'ἵ' => 'i', 'ἶ' => 'i', 'ἷ' => 'i', 'ὶ' => 'i',
            'ῐ' => 'i', 'ῑ' => 'i', 'ῒ' => 'i', 'ῖ' => 'i', 'ῗ' => 'i', 'κ' => 'k',
            'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => 'k', 'ο' => 'o', 'ό' => 'o',
            'ὀ' => 'o', 'ὁ' => 'o', 'ὂ' => 'o', 'ὃ' => 'o', 'ὄ' => 'o', 'ὅ' => 'o',
            'ὸ' => 'o', 'π' => 'p', 'ρ' => 'r', 'ῤ' => 'r', 'ῥ' => 'r', 'σ' => 's',
            'ς' => 's', 'τ' => 't', 'υ' => 'y', 'ύ' => 'y', 'ϋ' => 'y', 'ΰ' => 'y',
            'ὐ' => 'y', 'ὑ' => 'y', 'ὒ' => 'y', 'ὓ' => 'y', 'ὔ' => 'y', 'ὕ' => 'y',
            'ὖ' => 'y', 'ὗ' => 'y', 'ὺ' => 'y', 'ῠ' => 'y', 'ῡ' => 'y', 'ῢ' => 'y',
            'ῦ' => 'y', 'ῧ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'p', 'ω' => 'o',
            'ώ' => 'o', 'ὠ' => 'o', 'ὡ' => 'o', 'ὢ' => 'o', 'ὣ' => 'o', 'ὤ' => 'o',
            'ὥ' => 'o', 'ὦ' => 'o', 'ὧ' => 'o', 'ᾠ' => 'o', 'ᾡ' => 'o', 'ᾢ' => 'o',
            'ᾣ' => 'o', 'ᾤ' => 'o', 'ᾥ' => 'o', 'ᾦ' => 'o', 'ᾧ' => 'o', 'ὼ' => 'o',
            'ῲ' => 'o', 'ῳ' => 'o', 'ῴ' => 'o', 'ῶ' => 'o', 'ῷ' => 'o', 'А' => 'A',
            'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E',
            'Ж' => 'Z', 'З' => 'Z', 'И' => 'I', 'Й' => 'I', 'К' => 'K', 'Л' => 'L',
            'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S',
            'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'K', 'Ц' => 'T', 'Ч' => 'C',
            'Ш' => 'S', 'Щ' => 'S', 'Ы' => 'Y', 'Э' => 'E', 'Ю' => 'Y', 'Я' => 'Y',
            'а' => 'A', 'б' => 'B', 'в' => 'V', 'г' => 'G', 'д' => 'D', 'е' => 'E',
            'ё' => 'E', 'ж' => 'Z', 'з' => 'Z', 'и' => 'I', 'й' => 'I', 'к' => 'K',
            'л' => 'L', 'м' => 'M', 'н' => 'N', 'о' => 'O', 'п' => 'P', 'р' => 'R',
            'с' => 'S', 'т' => 'T', 'у' => 'U', 'ф' => 'F', 'х' => 'K', 'ц' => 'T',
            'ч' => 'C', 'ш' => 'S', 'щ' => 'S', 'ы' => 'Y', 'э' => 'E', 'ю' => 'Y',
            'я' => 'Y', 'ð' => 'd', 'Ð' => 'D', 'þ' => 't', 'Þ' => 'T', 'ა' => 'a',
            'ბ' => 'b', 'გ' => 'g', 'დ' => 'd', 'ე' => 'e', 'ვ' => 'v', 'ზ' => 'z',
            'თ' => 't', 'ი' => 'i', 'კ' => 'k', 'ლ' => 'l', 'მ' => 'm', 'ნ' => 'n',
            'ო' => 'o', 'პ' => 'p', 'ჟ' => 'z', 'რ' => 'r', 'ს' => 's', 'ტ' => 't',
            'უ' => 'u', 'ფ' => 'p', 'ქ' => 'k', 'ღ' => 'g', 'ყ' => 'q', 'შ' => 's',
            'ჩ' => 'c', 'ც' => 't', 'ძ' => 'd', 'წ' => 't', 'ჭ' => 'c', 'ხ' => 'k',
            'ჯ' => 'j', 'ჰ' => 'h',
        ];
        $str = str_replace(
            array_keys($transliteration),
                            array_values($transliteration),
                            $str
        );

        return $str;
    }

    private function upper($string)
    {
        return mb_strtoupper($string);
    }
}
