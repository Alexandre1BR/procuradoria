<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTiposJuizesEMeios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \App\Data\Models\Meio::truncate();
        \App\Data\Models\Meio::insert(
                [
                        'nome' => 'Físico',
                ]
        );

        \App\Data\Models\Meio::insert(
                [
                        'nome' => 'Eletrônico',
                ]
        );
        \App\Data\Models\Meio::insert(
                [
                        'nome' => 'N/C',
                ]
        );

        \App\Data\Models\TipoJuiz::truncate();
        \App\Data\Models\TipoJuiz::insert(
                [
                        'nome' => 'Ministro',
                ]
        );

        \App\Data\Models\TipoJuiz::insert(
                [
                        'nome' => 'Desembargador',
                ]
        );
        \App\Data\Models\TipoJuiz::insert(
                [
                        'nome' => 'Juiz',
                ]
        );
        \App\Data\Models\TipoJuiz::insert(
                [
                        'nome' => 'N/C',
                ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \App\Data\Models\Meio::truncate();
        \App\Data\Models\Meio::insert(
                [
                        'nome' => 'Físico',
                ]
        );

        \App\Data\Models\Meio::insert(
                [
                        'nome' => 'Eletrônico',
                ]
        );

        \App\Data\Models\TipoJuiz::truncate();
        \App\Data\Models\TipoJuiz::insert(
                [
                        'nome' => 'Ministro',
                ]
        );

        \App\Data\Models\TipoJuiz::insert(
                [
                        'nome' => 'Desembargador',
                ]
        );
        \App\Data\Models\TipoJuiz::insert(
                [
                        'nome' => 'Juiz',
                ]
        );
    }
}
