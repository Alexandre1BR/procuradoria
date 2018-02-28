<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProcessLink extends Migration
{
    public function up()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table->string('link', 2048)->nullable();
        });
    }

    public function down()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table->dropColumn('link');
        });
    }
}
