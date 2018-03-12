<?php

namespace Tests\Browser;

use Faker\Generator as Faker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AcoesTest extends DuskTestCase
{
    private static $nomeAcao;
    private static $abreviacaoAcao;

    public function init()
    {
        $faker = app(Faker::class);
        static::$nomeAcao = $faker->name;
        static::$abreviacaoAcao = $faker->name;
    }

    public function testInsert()
    {
        $this->init();

        $nomeA = static::$nomeAcao;
        $abreviacaoA = static::$abreviacaoAcao;

        $this->browse(function (Browser $browser) use ($nomeA, $abreviacaoA) {
            $browser->visit('/acoes')
                ->clickLink('Novo')
                ->type('#nome', $nomeA)
                ->type('#abreviacao', $abreviacaoA)
//                ->screenshot('acoes')
                ->press('Gravar')
                ->assertSee('Gravado com sucesso')
                ->assertSeeIn('#acoesTable', $nomeA)
                ->assertSeeIn('#acoesTable', $abreviacaoA);
        });
    }

    public function testValidation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/acoes')
                ->clickLink('Novo')
                ->press('Gravar')
                ->assertSee('O campo Nome é obrigatório.')
                ->assertSee('O campo Abreviação é obrigatório.');
        });
    }

    public function testWrongSearch()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/acoes')
                ->type('pesquisa', '45879349875348975387958973489734897345893478957984')
//                ->assertInputValue('pesquisa',$nomet)
//                ->type('abreviacao', $abrevt)
                ->click('#searchButton')
                ->waitForText('Nenhuma ação encontrada')
                ->assertSee('Nenhuma ação encontrada');
//                ->assertSeeIn('table',$nomet);
        });
    }

    public function testRightSearch()
    {
        $nomeA = static::$nomeAcao;
        $abreviacaoA = static::$abreviacaoAcao;

        $this->browse(function (Browser $browser) use ($nomeA, $abreviacaoA) {
            $browser->visit('/acoes')
                ->type('pesquisa', $nomeA)
                ->click('#searchButton')
//                ->waitForText($nomeA)
                ->assertSeeIn('#acoesTable', $nomeA)
                ->type('pesquisa', $abreviacaoA)
                ->click('#searchButton')
//                ->waitForText($abreviacaoA)
                ->assertSeeIn('#acoesTable', $abreviacaoA);
        });
    }

    public function testAlter()
    {
        $nomeA = static::$nomeAcao;
        $abreviacaoA = static::$abreviacaoAcao;
        $this->browse(function (Browser $browser) use ($nomeA, $abreviacaoA) {
            $browser->visit('/acoes')
                ->clickLink($nomeA)
//                ->screenshot('1')
                ->click('#editar')
                ->type('nome', '*'.$nomeA.'*')
                ->type('abreviacao', '*'.$abreviacaoA.'*')
//                ->screenshot('2')
                ->press('Gravar')
//                ->screenshot('3')
                ->assertSee('Gravado com sucesso')
                ->assertSee('*'.$nomeA.'*')
                ->assertSee('*'.$abreviacaoA.'*');
//                ->screenshot('4');
        });
    }
}
