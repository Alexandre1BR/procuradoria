<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddProcessosBotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos_bot', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tribunal_id')->unsigned();

            $table->string('instancia');

            $table->string('numero');

            $table->text('observacoes');

            $table->string('termo_buscado');

            $table->integer('ano');

            $table->timestamp('ignorado_em')->nullable();
            $table->timestamp('ignorado_por_id')->nullable();

            $table->timestamp('importado_em')->nullable();
            $table->timestamp('importado_por_id')->nullable();

            $table
                ->integer('processo_id')
                ->unsigned()
                ->nullable();

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
        Schema::drop('processos_bot');
    }
}
