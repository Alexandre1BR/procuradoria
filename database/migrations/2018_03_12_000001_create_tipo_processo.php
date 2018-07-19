<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoProcesso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_processos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');

            $table->timestamps();
        });

        \App\Data\Models\TipoProcesso::insert(['nome' => 'Alerj']);
        \App\Data\Models\TipoProcesso::insert(['nome' => 'Outros processos']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipos_processos');
    }
}
