<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableAndamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('andamentos', function ($table) {
            $table->string('quem')->nullable();
            $table->integer('tipo_parecer')->nullable();
        });
        Schema::create('tipo_parecer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
        });
        DB
            ::table('tipos_andamentos')
            ->insert(['id' => '3', 'nome' => 'Manifestação']);
        DB::table('tipo_parecer')->insert(['id' => '1', 'nome' => 'Favorável']);
        DB
            ::table('tipo_parecer')
            ->insert(['id' => '2', 'nome' => 'Não favorável']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('andamentos', function (Blueprint $table) {
            $table->dropColumn('quem');
        });
        Schema::table('andamentos', function (Blueprint $table) {
            $table->dropColumn('tipo_parecer');
        });
        DB::table('tipos_andamentos')->delete(['id' => '3']);
        Schema::drop('tipo_parecer');
    }
}
