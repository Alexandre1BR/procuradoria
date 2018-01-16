<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAndamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('andamentos', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('processo_id')->unsigned();
            $table->integer('tipo_andamento_id')->unsigned();
            $table->integer('tipo_entrada_id')->unsigned();
            $table->integer('tipo_prazo_id')->unsigned()->nullable();
            $table->timestamp('data_prazo')->nullable();
            $table->timestamp('data_entrega')->nullable();
            $table->text('observacoes')->nullable();

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
        Schema::drop('andamentos');
    }
}
