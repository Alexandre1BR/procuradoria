<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('numero_judicial');
            $table->string('numero_alerj');
            $table->integer('tribunal_id')->unsigned();
            $table->string('vara');
            $table->timestamp('data_distribuicao');
            $table->integer('acao_id')->unsigned();
            $table->integer('relator_id')->unsigned();
            $table->text('apensos_obs');
            $table->integer('juiz_id')->unsigned();
            $table->text('autor');
            $table->text('reu');
            $table->text('objeto');
            $table->text('merito');
            $table->text('liminar');
            $table->text('recurso');
            $table->integer('procurador_id')->unsigned();
            $table->integer('estagiario_id')->unsigned();
            $table->integer('assessor_id')->unsigned();
            $table->string('tipo_meio');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('processos');
    }
}
