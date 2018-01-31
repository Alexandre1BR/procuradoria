<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArquivamentoToProcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table->date('data_arquivamento')->nullable();
            $table->string('observacao_arquivamento')->nullable();
        });

        \App\Data\Models\Processo::all()->each(function ($table) {
            $table->data_arquivamento = null;
            $table->observacao_arquivamento = null;

            $table->save();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table->dropColumn('data_arquivamento');
            $table->dropColumn('observacao_arquivamento');
        });
    }
}
