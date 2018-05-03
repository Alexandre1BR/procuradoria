<?php

use App\Data\Models\Lei as LeiModel;
use App\Data\Models\ProcessoLei as ProcessosLeiModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTableLeis extends Migration
{
    protected $command;

    public function up()
    {
//        Schema::table('leis', function ($table) {
//            $table->dropColumn('user_type_id');
//        });

        //Cria a tabela processosleis
        Schema::create('processos_leis', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('processo_id')->unsigned();
            $table->integer('lei_id')->unsigned();

            $table->timestamps();
        });

        $leis = app(LeiModel::class)->all();

        //Mapeia pelo numero_lei
        foreach ($leis as $lei) {
            if (isset($array[$lei->numero_lei])) {
//                dump('Apagando ' . $lei->id . ' Numero lei ' . $lei->numero_lei);
                LeiModel::find($lei->id)->delete();
            } else {
                $array[$lei->numero_lei] = $lei->id;
            }
        }

        //Popula a tabela pivo
        foreach ($leis as $lei) {
//            dump('Processo id = '.$lei->processo_id.'      Lei id = '.$lei->id.'      $array[$lei->numero_lei] = '.$array[$lei->numero_lei]);

            DB::table('processos_leis')->insert(
                [
                    'processo_id' => $lei->processo_id,
                    'lei_id'      => $array[$lei->numero_lei],
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ]
            );
        }

        //Apaga a coluna de lei
        Schema::table('leis', function ($table) {
            $table->dropColumn('processo_id');
        });
    }

    public function down()
    {
//        Adiciona coluna em processo
        Schema::table('leis', function (Blueprint $table) {
            $table->integer('processo_id')->unsigned()->nullable(true);
        });

        //Transfere para tabela Leis
        $processoleis = app(ProcessosLeiModel::class)->all();

        //Passa a coluna processo
        foreach ($processoleis as $processolei) {
//            dd($processolei);
            $lei = LeiModel::find($processolei->lei_id);
//            $id = $lei['id'];

//            dd($id);

            if ($lei['processo_id'] == null) {
                $lei->update(['processo_id' => $processolei->processo_id]);
            } else {
                DB::table('leis')->insert(
                    [
                        'numero_lei'  => $lei['numero_lei'],
                        'autor'       => $lei['autor'],
                        'assunto'     => $lei['assunto'],
                        'link'        => $lei['link'],
                        'processo_id' => $processolei->processo_id,
                        'created_at'  => now(),
                        'updated_at'  => now(),
                    ]
                );
            }
        }

        Schema::table('leis', function (Blueprint $table) {
            $table->integer('processo_id')->nullable(false)->change();
        });

        //Dropa a tabela processolei
        Schema::drop('processos_leis');
    }
}
