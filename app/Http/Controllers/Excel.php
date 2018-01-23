<?php
/**
 * Created by PhpStorm.
 * User: afdsilva
 * Date: 23/01/2018
 * Time: 11:11.
 */

namespace App\Http\Controllers;

use App\Data\Repositories\Tribunais;
use Illuminate\Support\Facades\Cache;
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
                foreach ($data as $key => $value) {
//                    dd($value[$key]);
//                    dump($value[$key]->origem, $key);

                    list($tribunal, $vara) = $this->split($value, $key);

                    $tribunal =
                            app(Tribunais::class)
                                    ->firstOrCreate(['nome' => trim($tribunal) ?: 'N/C']);
                    $acao =
                            app(\App\Data\Repositories\Acoes::class)
                                ->firstOrCreate(['abreviacao' => trim($value[$key]->acao)]);

                    $insert[] =
                            [
                                'numero_judicial'   => $value[$key]->no_judicial,
                                'numero_alerj'      => $value[$key]->no_alerj,
                                'apensos_obs'       => $value[$key]->apensos,
                                'origem_id'         => $tribunal->id,
                                'vara'              => trim($vara),
                                'acao_id'           => $acao->id,
                                'relator_id',

                                'juiz_id',
                                'autor',
                                'reu',
                                'objeto',
                                'merito',
                                'liminar',
                                'recurso',
                                'procurador_id',
                                'estagiario_id',
                                'assessor_id',
                                'tipo_meio_id',
                            ];
                    dd($insert);
                }
                if (!empty($insert)) {
                    DB::table('items')->insert($insert);
                    dd('Insert Record successfully.');
                }
            }
        }

        return back();
    }

    /**
     * @param $value
     * @param $key
     *
     * @return array
     */
    public function split($value, $key): array
    {
        $split = explode('-', $value[$key]->origem);

        return [$split[0], isset($split[1]) ? $split[1] : null];
    }
}
