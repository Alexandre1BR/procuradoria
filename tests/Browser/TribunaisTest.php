<?php

namespace Tests\Browser;

use Faker\Generator as Faker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TribunaisTest extends DuskTestCase
{
    private static $nomeTribunal;
    private static $abreviacaoTribunal;

    public function init()
    {
        static::$nomeTribunal = app(Faker::class)->name;
        static::$abreviacaoTribunal = app(Faker::class)->name;
    }

    public function testInsert()
    {
        $this->init();
        $nomet = static::$nomeTribunal;
        $abrevt = static::$abreviacaoTribunal;

        $this->browse(function (Browser $browser) use ($nomet, $abrevt) {
            $browser->visit('/tribunais')
                ->clickLink('Novo')
                ->type('nome', $nomet)
                ->type('abreviacao', $abrevt)
                ->press('Gravar')
                ->assertSee('Gravado com sucesso')
                ->assertSee($nomet)
                ->assertSee($abrevt);
        });
    }

    public function testValidation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tribunais')
                ->clickLink('Novo')
//                ->type('nome', $nomet)
//                ->type('abreviacao', $abrevt)
                ->press('Gravar')
                ->assertSee('O campo Nome é obrigatório.')
                ->assertSee('O campo Abreviação é obrigatório.');
        });
    }

    public function testWrongSearch()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tribunais')
                ->type('pesquisa', '45879349875348975387958973489734897345893478957984')
//                ->assertInputValue('pesquisa',$nomet)
//                ->type('abreviacao', $abrevt)
                ->click('#searchButton')
                ->waitForText('Nenhum tribunal encontrado')
                ->assertSee('Nenhum tribunal encontrado');
//                ->assertSeeIn('table',$nomet);
        });
    }

    public function testRightSearch()
    {
        $nomet = static::$nomeTribunal;
        $abrevt = static::$abreviacaoTribunal;

        $this->browse(function (Browser $browser) use ($nomet, $abrevt) {
            $browser->visit('/tribunais')
//                ->type('abreviacao', $abrevt)
                ->type('pesquisa', $nomet)
                ->click('#searchButton')
                ->waitForText($nomet)
                ->assertSeeIn('#tribunalTable', $nomet);
        });
    }
}
