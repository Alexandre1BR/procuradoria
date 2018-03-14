<?php

namespace Tests\Browser;

use App\Data\Repositories\Processos as ProcessosRepository;
use App\Data\Repositories\TiposAndamentos as TiposAndamentosRepository;
use App\Data\Repositories\TiposPrazos as TiposPrazosRepository;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AndamentosTest extends DuskTestCase
{
    private static $processoAndamento;
    private static $tipoAndamentoAndamento;
    private static $tipoPrazoAndamento;
    private static $dataPrazoAndamento;
    private static $dataEntregaAndamento;
    private static $observacaoAndamento;

    public function init()
    {
        $faker = app(Faker::class);
        static::$processoAndamento = $faker->randomElement(app(ProcessosRepository::class)->all()->toArray());
        static::$tipoAndamentoAndamento = $faker->randomElement(app(TiposAndamentosRepository::class)->all()->toArray());
        static::$tipoPrazoAndamento = $faker->randomElement(app(TiposPrazosRepository::class)->all()->toArray());
        static::$dataPrazoAndamento = '01-01-2001';
        static::$dataEntregaAndamento = '01-01-2001';
        static::$observacaoAndamento = $faker->name;
    }

    public function testInsert()
    {
        $this->init();

        $processoA = static::$processoAndamento;
        $tipoAndamentoA = static::$tipoAndamentoAndamento;
        $tipoPrazoA = static::$tipoPrazoAndamento;
        $dataPrazoA = static::$dataPrazoAndamento;
        $dataEntregaA = static::$dataEntregaAndamento;
        $observacaoA = static::$observacaoAndamento;

        $this->browse(function (Browser $browser) use ($processoA, $tipoAndamentoA, $tipoPrazoA, $dataPrazoA, $dataEntregaA, $observacaoA) {
            $browser->visit('/andamentos')
                ->clickLink('Novo')
                ->select('#processo_id', $processoA['id'])
                ->select('#tipo_andamento_id', $tipoAndamentoA['id'])
                ->select('#tipo_prazo_id', $tipoPrazoA['id'])
                ->keys('#data_prazo', $dataPrazoA)
                ->keys('#data_entrega', $dataEntregaA)
                ->type('#observacoes', $observacaoA)
                ->press('Gravar')
                ->assertSee('Gravado com sucesso')
                ->assertSee($observacaoA);
        });
    }

    public function testValidation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/andamentos')
                ->clickLink('Novo')
                ->press('Gravar')
                ->assertSee('O campo Processo é obrigatório.')
                ->assertSee('O campo Tipo de andamento é obrigatório.');
        });
    }

    public function testWrongSearch()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/andamentos')
                ->type('pesquisa', '45879349875348975387958973489734897345893478957984')
//                ->assertInputValue('pesquisa',$nomet)
//                ->type('abreviacao', $abrevt)
                ->click('#searchButton')
                ->waitForText('Nenhum andamento encontrado')
                ->assertSee('Nenhum andamento encontrado');
//                ->assertSeeIn('table',$nomet);
        });
    }

    public function testRightSearch()
    {
        $observacaoA = static::$observacaoAndamento;

        $this->browse(function (Browser $browser) use ($observacaoA) {
            $browser->visit('/andamentos')
                ->type('pesquisa', $observacaoA)
                ->click('#searchButton')
                ->waitForText($observacaoA)
                ->assertSeeIn('#andamentosTable', $observacaoA);
        });
    }

    public function testAlter()
    {
        $faker = app(Faker::class);

        $processoA = $faker->randomElement(app(ProcessosRepository::class)->all()->toArray());
        $tipoAndamentoA = $faker->randomElement(app(TiposAndamentosRepository::class)->all()->toArray());
        $tipoPrazoA = $faker->randomElement(app(TiposPrazosRepository::class)->all()->toArray());
        $dataPrazoA = \DateTime::createFromFormat('m-d-Y', '03-02-2333')->format('m-d-Y');
        $dataEntregaA = \DateTime::createFromFormat('m-d-Y', '04-05-2444')->format('m-d-Y');
        $observacaoA = $faker->name;

//        DateTime::createFromFormat('m-d-Y', '10-16-2003');

        $numProcesso = static::$processoAndamento['numero_judicial'];
//        Carbon::createFromFormat('Y-m-d', $dataPrazoA)->format('d/m/Y')

        $this->browse(function (Browser $browser) use ($processoA, $tipoAndamentoA, $tipoPrazoA, $dataPrazoA, $dataEntregaA, $observacaoA, $numProcesso) {
            $browser->visit('/andamentos')
//                ->screenshot('0')
                ->clickLink($numProcesso)
//                ->screenshot('1')
                ->click('#editar')
                ->select('#processo_id', $processoA['id'])
                ->select('#tipo_andamento_id', $tipoAndamentoA['id'])
                ->select('#tipo_prazo_id', $tipoPrazoA['id'])
                ->keys('#data_prazo', $dataPrazoA)
                ->keys('#data_entrega', $dataEntregaA)
                ->type('#observacoes', $observacaoA)
//                ->screenshot('2')
                ->press('Gravar')
//                ->screenshot('3')
                ->assertSee('Gravado com sucesso')
                ->assertSee($processoA['numero_judicial'])
                ->assertSee($tipoAndamentoA['nome'])
                ->assertSee($tipoPrazoA['nome'])
                ->assertSee(Carbon::createFromFormat('m-d-Y', $dataPrazoA)->format('d/m/Y'))
                ->assertSee(Carbon::createFromFormat('m-d-Y', $dataEntregaA)->format('d/m/Y'))
                ->assertSee($observacaoA);
//                ->screenshot('4');
        });
    }

    public function testInsertInsideProcesso()
    {
        $this->init();

        $processoA = static::$processoAndamento;
        $tipoAndamentoA = static::$tipoAndamentoAndamento;
        $tipoPrazoA = static::$tipoPrazoAndamento;
        $dataPrazoA = static::$dataPrazoAndamento;
        $dataEntregaA = static::$dataEntregaAndamento;
        $observacaoA = static::$observacaoAndamento;

        $this->browse(function (Browser $browser) use ($processoA,$tipoAndamentoA,$tipoPrazoA,$dataPrazoA,$dataEntregaA,$observacaoA) {
            $browser->visit('/processos/'.$processoA['id'])
                ->click('#editar')
                ->click('#buttonAndamentos')
//                ->screenshot('1')
//                ->select('#processo_id', $processoA['id'])
                ->select('#tipo_andamento_id', $tipoAndamentoA['id'])
                ->select('#tipo_prazo_id', $tipoPrazoA['id'])
                ->keys('#data_prazo', $dataPrazoA)
                ->keys('#data_entrega', $dataEntregaA)
                ->type('#observacoes', $observacaoA)
                ->press('Gravar')
                ->assertSee('Gravado com sucesso')
//                ->screenshot('2')
                ->assertSeeIn('#andamentosTable', $observacaoA);
        });
    }
}
