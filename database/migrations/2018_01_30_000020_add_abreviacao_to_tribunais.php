<?php

use App\Data\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAbreviacaoToTribunais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tribunais', function (Blueprint $table) {
            $table->string('abreviacao')->nullable()->unique()->index();
        });

        \App\Data\Models\Tribunal::all()->each(function ($tribunal) {
            $tribunal->abreviacao = $tribunal->nome;

            $tribunal->save();
        });

        Schema::table('tribunais', function (Blueprint $table) {
            $table->string('abreviacao')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abreviacao', function (Blueprint $table) {
            $table->dropColumn('abreviacao');
        });
    }
}
