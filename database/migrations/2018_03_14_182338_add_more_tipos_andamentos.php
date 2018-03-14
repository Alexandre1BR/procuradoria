<?php

use App\Data\Models\TipoAndamento;
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
        collect([
            ['nome' => 'Manifestação'],
            ['nome' => 'Despacho'],
            ['nome' => 'Petição'],
            ['nome' => 'Publicação'],
            ['nome' => 'Decisão'],
            ['nome' => 'Andamento'],
            ['nome' => 'Carga'],
        ])->each(function ($tipo) {
            $found = TipoAndamento::where('nome', $tipo['nome'])->first();

            if (!$found) {
                $a = new TipoAndamento();

                $a->nome = $tipo['nome'];

                $a->save();
            }
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
