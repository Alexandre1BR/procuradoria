<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTiposJuizes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_juizes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');

            $table->timestamps();
        });

      /*  DB::table('tipos_juizes')->insert(
            [
                'id'   => '1',
                'nome' => 'Ministro',
            ]
        );

        DB::table('tipos_juizes')->insert(
            [
                'id'   => '2',
                'nome' => 'Desembargador',
            ]
        );

        DB::table('tipos_juizes')->insert(
            [
                'id'   => '3',
                'nome' => 'Juiz',
            ]
        );*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipos_juizes');
    }
}
