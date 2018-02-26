<?php

namespace Tests\Browser;

use App\Data\Repositories\Processos as ProcessosRepository;
use App\Data\Repositories\TiposAndamentos as TiposAndamentosRepository;
use App\Data\Repositories\TiposPrazos as TiposPrazosRepository;
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
        static::$processoAndamento = $faker->randomElement(app(ProcessosRepository::class)->getAllIds()->toArray());
        static::$tipoAndamentoAndamento = $faker->randomElement(app(TiposAndamentosRepository::class)->getAllIds()->toArray());
        static::$tipoPrazoAndamento = $faker->randomElement(app(TiposPrazosRepository::class)->getAllIds()->toArray());
//        static::$dataPrazoAndamento = $faker->date('d-m-Y','now');
        static::$dataPrazoAndamento = "01-01-2001";
        static::$dataEntregaAndamento = "01-01-2001";
//            $faker->date('d-m-Y','now');
//        dd(static::$dataEntregaAndamento);
//        static::$dataEntregaAndamento;
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
                ->select('#processo_id', $processoA)
                ->select('#tipo_andamento_id', $tipoAndamentoA)
                ->select('#tipo_prazo_id', $tipoPrazoA)
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
                ->assertSee('O campo Tipo prazo é obrigatório.')
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
}
