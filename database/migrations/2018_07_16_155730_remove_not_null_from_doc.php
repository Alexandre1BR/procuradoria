<?php
use App\Data\Models\TipoUsuario as TipoUsuarioModel;
use Illuminate\Database\Migrations\Migration;

class RemoveNotNullFromDoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('opinions', function ($table) {
            $table
                ->text('file_doc')
                ->nullable()
                ->change();
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
