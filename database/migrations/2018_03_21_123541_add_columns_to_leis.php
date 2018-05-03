<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToLeis extends Migration
{
    public function up()
    {
        Schema::table('leis', function (Blueprint $table) {
            $table->string('artigo')->nullable();
            $table->string('paragrafo')->nullable();
            $table->string('inciso')->nullable();
            $table->string('alinea')->nullable();
            $table->string('item')->nullable();

            $table->integer('nivel_federativo_id')->nullable()->unsigned();
            $table->integer('tipo_lei_id')->nullable()->unsigned();
        });
    }

    public function down()
    {
        Schema::table('leis', function ($table) {
            $table->dropColumn('artigo');
            $table->dropColumn('paragrafo');
            $table->dropColumn('inciso');
            $table->dropColumn('alinea');
            $table->dropColumn('item');

            $table->dropColumn('nivel_federativo_id');
            $table->dropColumn('tipo_lei_id');
        });
    }
}
