<?php
use Illuminate\Database\Migrations\Migration;

use App\Data\Models\TipoUsuario as TipoUsuarioModel;

class AddTypeAdministrador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        TipoUsuarioModel::create(['nome' => 'Administrador']);
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
