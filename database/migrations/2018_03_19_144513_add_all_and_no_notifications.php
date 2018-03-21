<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddAllAndNoNotifications extends Migration
{
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->boolean('all_notifications')->unsigned()->default(false);
            $table->boolean('no_notifications')->unsigned()->default(false);
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('all_notifications');
            $table->dropColumn('no_notifications');
        });
    }
}
