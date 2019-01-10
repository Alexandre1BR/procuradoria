<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTermosBuscaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termos_busca', function (Blueprint $table) {
            $table->increments('id');

            $table
                ->integer('tribunal_id')
                ->unsigned()
                ->nullable();

            $table->string('termo');

            $table->timestamp('ultima_busca_em');

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
        Schema::drop('termos_busca');
    }
}
