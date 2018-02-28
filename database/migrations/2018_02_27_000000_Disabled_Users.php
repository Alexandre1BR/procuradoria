<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DisabledUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //$table->softDeletes();
            //$table->date('deleted_at')->nullable();
            $table->string('disabled_by_id')->nullable();
            $table->string('disabled_at')->nullable();
        });
    }
}
