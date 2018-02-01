<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLeis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leis', function (Blueprint $table) {
            $table->increments('id');

            $table->string('numero_lei')->nullable();
            $table->string('autor')->nullable();
            $table->string('assunto')->nullable();
            $table->string('link')->nullable();
            $table->integer('processo_id')->unsigned();

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
        Schema::drop('leis');
    }
}
