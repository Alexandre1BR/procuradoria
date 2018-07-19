<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class FixObservacoes extends Migration
{
    public function up()
    {
        Schema::table('processos', function ($table) {
            $table->text('observacao_arquivamento')->change();

            $table->text('observacao')->change();
        });
    }

    public function down()
    {

    }
}
