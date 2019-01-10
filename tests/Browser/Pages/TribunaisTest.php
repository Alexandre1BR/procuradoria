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
            $browser
                ->visit('/tribunais')
                ->clickLink('Novo')
                ->type('nome', $nomet)
                ->type('abreviacao', $abrevt)
                ->press('Gravar')
                ->assertSee('Gravado com sucesso')
                ->assertSee($nomet)
                ->assertSee($abrevt);
        });
    }

    public function testWrongSearch()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/tribunais')
                ->type(
                    'pesquisa',
                    '45879349875348975387958973489734897345893478957984'
                )
                ->click('#searchButton')
                ->waitForText('Nenhum tribunal encontrado')
                ->assertSee('Nenhum tribunal encontrado');
        });
    }

    public function testRightSearch()
    {
        $nomet = static::$nomeTribunal;
        $abrevt = static::$abreviacaoTribunal;
        $this->browse(function (Browser $browser) use ($nomet, $abrevt) {
            $browser
                ->visit('/tribunais')
                ->type('pesquisa', $nomet)
                ->click('#searchButton')
                ->waitForText($nomet)
                ->assertSeeIn('#tribunalTable', $nomet);
        });
    }

    public function testValidation()
    {
        $nomet = static::$nomeTribunal;
        $this->browse(function (Browser $browser) use ($nomet) {
            $browser
                ->visit('/tribunais')
                ->clickLink('Novo')
                ->press('Gravar')
                ->assertSee('O campo Nome é obrigatório.')
                ->assertSee('O campo Abreviação é obrigatório.');
        });
    }

    public function testAlter()
    {
        $nomet = static::$nomeTribunal;
        $abrevt = static::$abreviacaoTribunal;
        $this->browse(function (Browser $browser) use ($nomet, $abrevt) {
            $browser
                ->visit('/tribunais')
                ->clickLink($nomet)
                ->click('#editar')
                ->type('nome', '*' . $nomet . '*')
                ->type('abreviacao', '*' . $abrevt . '*')
                ->press('Gravar')
                ->assertSee('Gravado com sucesso')
                ->assertSee('*' . $nomet . '*')
                ->assertSee('*' . $abrevt . '*');
        });
    }
}
