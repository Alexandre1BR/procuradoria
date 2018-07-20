<?php
use Illuminate\Database\Migrations\Migration;

class AddCreatedByToOpinions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('opinions', function ($table) {
            $table->integer('created_by')->unsigned();

            $table->integer('updated_by')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
