<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllowNullableProcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table
                ->text('numero_judicial')
                ->nullable()
                ->change();
            $table
                ->text('numero_alerj')
                ->nullable()
                ->change();

            $table
                ->integer('tribunal_id')
                ->nullable()
                ->unsigned()
                ->change();
            $table
                ->string('vara')
                ->nullable()
                ->change();

            $table
                ->dateTime('data_distribuicao')
                ->nullable()
                ->change();

            $table
                ->string('autor')
                ->nullable()
                ->change();
            $table
                ->string('reu')
                ->nullable()
                ->change();

            $table
                ->integer('relator_id')
                ->nullable()
                ->unsigned()
                ->change();
            $table
                ->text('apensos_obs')
                ->nullable()
                ->change();
            $table
                ->integer('juiz_id')
                ->nullable()
                ->unsigned()
                ->change();

            $table
                ->text('objeto')
                ->nullable()
                ->change();
            $table
                ->text('merito')
                ->nullable()
                ->change();
            $table
                ->text('liminar')
                ->nullable()
                ->change();
            $table
                ->text('recurso')
                ->nullable()
                ->change();

            $table
                ->integer('procurador_id')
                ->nullable()
                ->unsigned()
                ->change();
            $table
                ->integer('estagiario_id')
                ->nullable()
                ->unsigned()
                ->change();
            $table
                ->integer('assessor_id')
                ->nullable()
                ->unsigned()
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
        Schema::table('processos', function (Blueprint $table) {
            $table->text('numero_judicial')->change();
            $table->string('numero_alerj')->change();

            $table
                ->integer('tribunal_id')
                ->unsigned()
                ->change();
            $table->string('vara')->change();

            $table->dateTime('data_distribuicao')->change();

            $table->string('autor')->change();
            $table->string('reu')->change();

            $table
                ->integer('relator_id')
                ->unsigned()
                ->change();
            $table->text('apensos_obs')->change();
            $table
                ->integer('juiz_id')
                ->unsigned()
                ->change();

            $table->text('objeto')->change();
            $table->text('merito')->change();
            $table->text('liminar')->change();
            $table->text('recurso')->change();

            $table
                ->integer('procurador_id')
                ->unsigned()
                ->change();
            $table
                ->integer('estagiario_id')
                ->unsigned()
                ->change();
            $table
                ->integer('assessor_id')
                ->unsigned()
                ->change();
        });
    }
}
