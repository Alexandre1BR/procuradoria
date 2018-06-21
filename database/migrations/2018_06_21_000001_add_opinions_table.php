<?php
use App\Data\Models\OpinionScope;
use App\Data\Models\OpinionSubject;
use App\Data\Models\OpinionType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOpinionsTable extends Migration
{
    public function up()
    {
        Schema::create('opinions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('opinion_scope_id')->unsigned(); // abrangência

            $table->integer('attorney_id')->unsigned(); // procurador / usuário

            $table->integer('opinion_type_id')->unsigned();

            $table->string('suit_number')->nullable(); // número do processo

            $table->string('suit_sheet')->nullable(); // folha do processo

            $table->string('identifier')->nullable(); // identificador do parecer / número do parecer

            $table->date('date');

            $table->string('party')->nullable(); // interessado

            $table->text('abstract'); // ementa

            $table->text('opinion')->nullable(); // parecer

            $table->string('file');

            // $table->string('file'); ---------- TAGS!!!!

            $table->timestamps();
        });

        Schema::create('opinion_scopes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->timestamps();
        });

        Schema::create('opinion_types', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->timestamps();
        });

        Schema::create('opinion_subjects', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->timestamps();
        });

        Schema::create('opinions_subjects', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('opinion_id')->unsigned();

            $table->integer('subject_id')->unsigned();

            $table->timestamps();
        });

        $this->populate();
    }

    public function down()
    {
        Schema::drop('opinions');
        Schema::drop('opinions_subjects');
        Schema::drop('opinion_scopes');
        Schema::drop('opinion_types');
        Schema::drop('opinion_subjects');
    }

    public function populate()
    {
        OpinionScope::create(['name' => 'Administrativo']);
        OpinionScope::create(['name' => 'Judicial']);

        OpinionType::create(['name' => 'Parecer']);
        OpinionType::create(['name' => 'Decisão']);

        OpinionSubject::create(['name' => 'Estágio']);
    }
}
