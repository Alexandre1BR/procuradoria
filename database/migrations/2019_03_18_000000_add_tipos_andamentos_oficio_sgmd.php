<?php

use App\Data\Models\TipoAndamento;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTiposAndamentosOficioSGMD extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        TipoAndamento::firstOrCreate(['nome' => 'Ofício SGMD']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        TipoAndamento::where('nome', 'Ofício SGMD')->delete();
    }
}
