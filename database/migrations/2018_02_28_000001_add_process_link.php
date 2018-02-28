<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
