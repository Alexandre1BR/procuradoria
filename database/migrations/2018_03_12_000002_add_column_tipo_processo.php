<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTipoProcesso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table
                ->integer('tipo_processo_id')
                ->nullable()
                ->unsigned();
            $table
                ->integer('acao_id')
                ->nullable()
                ->unsigned()
                ->change();
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
            $table->dropColumn('tipo_processo_id');
            $table
                ->integer('acao_id')
                ->unsigned()
                ->change();
        });
    }
}
