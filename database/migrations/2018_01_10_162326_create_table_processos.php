<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('origem_id')->unsigned();
            $table->string('origem_complemento');
            $table->timestamp('data_distribuicao');
            $table->integer('acao_id');
            $table->integer('relator_id');
            $table->text('apensos_obs');
            $table->integer('juiz_id');
            $table->integer('autor');
            $table->text('reu');
            $table->text('objeto');
            $table->text('merito');
            $table->text('liminar');
            $table->text('recurso');
            $table->integer('procurador_id');
            $table->integer('estagiario_id');
            $table->integer('assessor_id');
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
