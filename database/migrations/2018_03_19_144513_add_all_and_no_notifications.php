<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Data\Models\User as UserModel;

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
