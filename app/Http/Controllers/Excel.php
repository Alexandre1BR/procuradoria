<?php
/**
 * Created by PhpStorm.
 * User: afdsilva
 * Date: 23/01/2018
 * Time: 11:11.
 */

namespace App\Http\Controllers;

use App\Data\Models\Processo;
use App\Data\Models\TipoUsuario as ModelTipoUsuario;
use App\Data\Models\User as ModelUser;
use App\Data\Repositories\Acoes;
use App\Data\Repositories\Juizes;
use App\Data\Repositories\Meios;
use App\Data\Repositories\TiposJuizes;
use App\Data\Repositories\Tribunais;
use App\Data\Repositories\Users;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Excel extends Controller
{
    public function importExport()
    {
        return view('excel.importExport');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function importExcel()
    {
        if (Input::hasFile('import_file')) {
            $data = Cache::remember('importExcel', 30, function () {
                $path = Input::file('import_file')->getRealPath();

                return \Maatwebsite\Excel\Facades\Excel::load($path, function ($reader) {
                })->get();
            });

            if (!empty($data) && $data->count()) {
                foreach ($data[0] as $key => $value) {
                    $obs = '';

                    $tribunal = null;
                    $vara = null;
                    if (!is_null($value->origem)) {
                        list($tribunal, $vara) = $this->split($value);
                    }
                    $tribunal = app(Tribunais::class)
                        ->firstOrCreate(
                            [
                                'nome'       => trim($tribunal) ?: 'N/C',
                                'abreviacao' => trim($tribunal) ?: 'N/C',
                            ]);
                    // Nome e Abreviação receberam os mesmos dados , já que ora esta abreviado e ora esta 'nomeado'
                    $acao = app(Acoes::class)
                                    ->firstOrCreate([
                                            'nome'       => trim($value->acao) ?: 'N/C',
                                            'abreviacao' => trim($value->acao) ?: 'N/C',
                                    ]);

                    //Tipo_Relator → (juiz, Ministro, Desembargador, N/C)
                    $tipo_relator = $this->ajustaTipoRelator($value->relator);
                    $tipo_relator = app(TiposJuizes::class)->firstOrCreate(['nome' => $tipo_relator]);

                    $nome_relator = $this->ajustaNomeRelator($value->no_alerj);

                    $relator_juiz = app(Juizes::class)
                                    ->firstOrCreate([
                                            'nome'         => $nome_relator,
                                            'lotacao_id'   => $tribunal->id,
                                            'tipo_juiz_id' => $tipo_relator->id,
                                    ]);

                    if(!is_null($value->procurador)){
                        if(!is_null($this->buscaUsuario($value->procurador, 1))){
                            $procurador = $this->buscaUsuario($value->procurador, 1)->id;
                        }else{
                            $procurador = null;
                            $obs = $obs . 'Procurador: ' . $value->procurador . ', ';
                        }
                    }else{
                        $procurador = null;
                    }
//                    $procurador = !is_null($value->procurador)
//                        ? !is_null($this->buscaUsuario($value->procurador))
//                            ?   $this->buscaUsuario($value->procurador)->id
//                            :   $obs = $obs . 'Procurador: ' . $value->procurador . '\n'
//                        : null;

                    if(!is_null($value->estagiario)){
                        if(!is_null($this->buscaUsuario($value->estagiario, 2))){
                            $estagiario = $this->buscaUsuario($value->estagiario, 2)->id;
                        }else{
                            $estagiario = null;
                            $obs = $obs . 'Estagiário: ' . $value->estagiario . ', ';
                        }
                    }else{
                        $estagiario = null;
                    }

                    if(!is_null($value->assessor)){
                        if(!is_null($this->buscaUsuario($value->assessor, 3))){
                            $assessor = $this->buscaUsuario($value->assessor, 3)->id;
                        }else{
                            $assessor = null;
                            $obs = $obs . 'Assessor: ' . $value->assessor . ', ';
                        }
                    }else{
                        $assessor = null;
                    }

                    $tipo_meio = $this->ajustaTipoMeio($value->tipo);

                    $tipo_meio = app(Meios::class)
                                    ->firstOrCreate(['nome' => $tipo_meio]); //TODO => 'N/C'
                    $insert[] =
                            [
                                    'numero_judicial' => str_ireplace("\n", '', trim($value->no_judicial)),
                                    'numero_alerj'    => str_ireplace("\n", '', trim($value->no_alerj)),
                                    'apensos_obs'     => str_ireplace("\n", '', trim($value->apensos)),
                                    'tribunal_id'     => str_ireplace("\n", '', trim($tribunal->id)), //Origem
                                    'vara'            => str_ireplace("\n", '', trim($vara)),
                                    'acao_id'         => str_ireplace("\n", '', trim($acao->id)),
                                    'relator_id'      => str_ireplace("\n", '', trim($relator_juiz->id)),
//'                                 tipo_juiz_id'  =>str_ireplace("\n", "", trim($tipo_relator->id)), //Tipo_Relator → (juiz, Ministro, Desembargador, N/C)
                                    'autor'           => str_ireplace("\n", '', trim($value->autor)),
                                    'reu'             => str_ireplace("\n", '', trim($value->reu)),
                                    'objeto'          => str_ireplace("\n", '', trim($value->objeto)),
                                    'merito'          => str_ireplace("\n", '', trim($value->merito)),
                                    'liminar'         => str_ireplace("\n", '', trim($value->liminar)),
                                    'recurso'         => str_ireplace("\n", '', trim($value->recurso)),
                                    'procurador_id'   => $procurador,
                                    'estagiario_id'   => $estagiario,
                                    'assessor_id'     => $assessor,
                                    'tipo_meio_id'   => str_ireplace("\n", '', trim($tipo_meio->id)),
                                    'created_at'  => now(),
                                    'updated_at'  => now(),
                                    'observacao'    => $obs,
                    ];
                }
                if (!empty($insert)) {
                    Processo::insert($insert);
                    dd('Excel Importado com Sucesso.');
                }
            }
        }

        return back();
    }

    public function importUsers()
    {
        if (Input::hasFile('import_file')) {
            $data = Cache::remember('importUsers', 5, function () {
                $path = Input::file('import_file')->getRealPath();

                return \Maatwebsite\Excel\Facades\Excel::load($path, function ($reader) {
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
                    //dump($name);
                }
                dd('Insert Record successfully.');
            }
        }

        return back();
    }

    private function buscaUsuario($user, $type)
    {
        //Does not work with duplicate users
        $search = collect(explode(' ', $user))->map(function ($item) {
                return $this->removerAcentuacao(strtolower($item));
        });

        foreach ($search as $word)
        {
            if($word == 'dr')
            {
                continue;
            }

            $q = ModelUser::whereRaw("lower(name) like '%{$word}%'")->whereRaw("user_type_id = {$type}")->get()->first();
            //DB::listen(function($q) { dump($q->sql); dump($q->bindings); });

            if (!is_null($q))
            {
                //dump($q->name . ' -> ' . $word);
                return $q;
            }
        }
    }

    private function ajustaTipoUsuario($tipo_user)
    {
        $tipo_user = strtolower(trim($tipo_user));

        return ModelTipoUsuario::whereRaw("lower(nome) like '%{$tipo_user}%'")->get()->first();
    }

    public function split($value): array
    {
        $split = explode('-', $value->origem);
        $tribunal = isset($split[0]) ? trim($split[0]) : null;
        $vara = isset($split[1]) ? trim($split[1]) : null;

        return [$tribunal, $vara];
    }

    private function ajustaNomeRelator($relator)
    {
        if (!is_null($relator)) {
            $relator = strtoupper(trim($relator));

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
        $tipo_relator = strtolower(trim($relator));
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
        $tipo_meio = strtolower(trim($tipo_meio));
        if (starts_with(trim($tipo_meio), 'f')) {
            $tipo_meio = 'Físico';
        } elseif (starts_with(trim($tipo_meio), 'e')) {
            $tipo_meio = 'Eletrônico';
        } else {
            $tipo_meio = 'N/C';
        }

        return $tipo_meio;
    }

    private function removerAcentuacao($string)
    {
        $string = str_replace(
            ['à', 'á', 'â', 'ã', 'ä', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý'],
            ['a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y'],
            $string
    );

        return $string;
    }
}
