<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use App\Data\Repositories\Users as UsersRepository;
use App\Data\Repositories\Tribunais as TribunaisRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Faker\Generator as Faker;

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
        $abrevt =  static::$abreviacaoTribunal;

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
        //app(TribunaisRepository::class)->deleteByName($nome);
    }

    public function testBusca()
    {
        $nomet = static::$nomeTribunal;
        $abrevt =  static::$abreviacaoTribunal;

        $this->browse(function (Browser $browser) use ($nomet, $abrevt) {
            $browser->visit('/tribunais')
//                ->clickLink('Novo')
                ->type('pesquisa', $nomet)
//                ->type('abreviacao', $abrevt)
                ->click('searchForm')
                ->assertSeeIn('table', $nomet);
        });
    }
}
