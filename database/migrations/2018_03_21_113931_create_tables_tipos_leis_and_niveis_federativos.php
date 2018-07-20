<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTiposLeisAndNiveisFederativos extends Migration
{
    public function up()
    {
        Schema::create('niveis_federativos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');

            $table->timestamps();
        });

        $array = ['1' => 'Federal', '2' => 'Estadual', '3' => 'Municipal'];

        foreach ($array as $item) {
            DB
                ::table('niveis_federativos')
                ->insert([
                    'nome'       => $item,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
        }

        Schema::create('tipos_leis', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');

            $table->timestamps();
        });

        $array = [
            '1'  => 'Emenda constitucional',
            '2'  => 'Tratado internacional sobre Direitos Humanos',
            '3'  => 'Lei complementar',
            '4'  => 'Lei ordinária',
            '5'  => 'Tratado internacional',
            '6'  => 'Medida provisória',
            '7'  => 'Lei delegada',
            '8'  => 'Decreto legislativo',
            '9'  => 'Resolução',
            '10' => 'Decreto',
            '11' => 'Decreto Lei',
            '12' => 'Portaria',
        ];

        foreach ($array as $item) {
            DB
                ::table('tipos_leis')
                ->insert([
                    'nome'       => $item,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
        }
    }

    public function down()
    {
        Schema::drop('niveis_federativos');

        Schema::drop('tipos_leis');
    }
}
