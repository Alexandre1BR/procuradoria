<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoProcesso extends Migration
{
    public function up()
    {
        Schema::create('tipos_processos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');

            $table->timestamps();
        });

        \App\Data\Models\TipoProcesso::insert(
                [
                    'nome' => 'Alerj',
                ]
        );
        \App\Data\Models\TipoProcesso::insert(
                [
                    'nome' => 'Outros processos',
                ]
        );
    }

    public function down()
    {
        Schema::drop('tipos_processos');
        \App\Data\Models\TipoProcesso::truncate();
    }
}
