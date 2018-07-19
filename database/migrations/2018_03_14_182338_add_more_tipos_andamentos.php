<?php
use App\Data\Models\TipoAndamento;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            ['nome' => 'Recebimento'],
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
        DB::table('tipos_andamentos')->truncate();
    }
}
