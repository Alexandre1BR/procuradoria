<?php

use App\Data\Models\Notification;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotificationColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Notification::truncate();

        Schema::table('notifications', function (Blueprint $table) {
            $table->string('via');
            $table->string('to');
            $table->string('subject');
            $table->integer('subject_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropColumn('via');
            $table->dropColumn('email');
        });
    }
}
