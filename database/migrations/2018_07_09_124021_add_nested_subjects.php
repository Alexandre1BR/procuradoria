<?php

use App\Data\Models\OpinionSubject;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNestedSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('opinion_subjects');
        Schema::create('opinion_subjects', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->timestamps();

            $table->nestedSet();
        });

        $this->populate();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('opinion_subjects');
        Schema::create('opinion_subjects', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->timestamps();
        });
    }

    public function populate()
    {
        OpinionSubject::create([
            'name'     => 'Root',
            'children' => [
                    [
                        'name'     => 'Servidor Público',
                        'children' => [
                                ['name' => 'Abono permanência'],
                                [
                                    'name'     => 'Aposentadoria',
                                    'children' => [
                                            ['name' => 'Voluntária'],
                                            ['name' => 'Compulsória'],
                                            ['name' => 'Invalidez'],
                                            [
                                                'name'     => 'Revisão dos proventos',
                                                'children' => [['name' => 'Gratificação Especial de Serviço de Segurança']],
                                            ],
                                            ['name' => 'Tempo Especial para Aposentadoria Segurança'],
                                            ['name' => 'Sustação de Imposto de Renda'],
                                            ['name' => 'Suspensão de desconto previdenciário'],
                                        ],
                                ],
                                ['name' => 'Adicional de qualificação'],
                                ['name' => 'Averbação de tempo de serviço'],
                                ['name' => 'Cancelamento de desconto previdenciário'],
                                ['name' => '1/3 de férias indenizado'],
                                ['name' => 'Auxílio funeral, encerramento de folha e 13º salário'],
                                ['name' => 'Reversão de pensão IPALERJ'],
                                ['name' => 'Bolsa de reforço escolar/Auxílio-educação'],
                                ['name' => 'Revisão de incorporação'],
                                ['name' => 'Inclusão de dependentes'],
                                ['name' => 'Gratificação dedicação legislativa'],
                                ['name' => 'Estágio'],
                                ['name' => 'Gratificação Especial de Serviço de Segurança'],
                            ],
                    ],
                    ['name' => 'Licitação'],
                    ['name' => 'Contrato Administrativo'],
                    ['name' => 'CPI'],
                    ['name' => 'Patrimonial', 'children' => [['name' => 'Veículos']]],
                    ['name' => 'Estatuto dos Parlamentares'],
                    [
                        'name'     => 'Judicial',
                        'children' => [
                                ['name' => 'ADIN'],
                                ['name' => 'RI'],
                                ['name' => 'Ação Popular'],
                                ['name' => 'MS'],
                                ['name' => 'Ações Diversas'],
                            ],
                    ],
                ],
        ]);
    }
}
