<?php

use App\Data\Models\TipoUsuario as TipoUsuarioModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddUserTypes extends Migration
{
    public function up()
    {
        TipoUsuarioModel::create(['nome' => 'Procurador']);

        TipoUsuarioModel::create(['nome' => 'Estagiario']);

        TipoUsuarioModel::create(['nome' => 'Assessor']);

        Schema::table('users', function ($table) {
            $table->integer('user_type_id')->unsigned();
        });
    }

    public function down()
    {
        DB
            ::table('tipos_usuarios')
            ->where('nome', '=', 'Procurador')
            ->delete();
        DB
            ::table('tipos_usuarios')
            ->where('nome', '=', 'Estagiario')
            ->delete();
        DB
            ::table('tipos_usuarios')
            ->where('nome', '=', 'Assessor')
            ->delete();

        Schema::table('users', function ($table) {
            $table->dropColumn('user_type_id');
        });
    }
}
