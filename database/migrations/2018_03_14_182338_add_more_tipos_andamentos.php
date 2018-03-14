<?php

use App\Data\Models\TipoAndamento;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreTiposAndamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('tipos_andamentos');

        Schema::create('tipos_andamentos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');

            $table->timestamps();
        });

        collect([
            ['nome' => 'Prazo'],
            ['nome' => 'Manifestação'],
            ['nome' => 'Despacho'],
            ['nome' => 'Petição'],
            ['nome' => 'Publicação'],
            ['nome' => 'Decisão'],
            ['nome' => 'Andamento'],
            ['nome' => 'Carga'],
        ])->each(function ($tipo) {
            TipoAndamento::firstOrCreate($tipo);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
