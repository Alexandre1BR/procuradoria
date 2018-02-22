<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use App\Data\Repositories\Users as UsersRepository;
use App\Data\Repositories\Tribunais as TribunaisRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Faker\Generator as Faker;

class JuizesTest extends DuskTestCase
{
    private static $nomeJuiz;
    private static $abreviacaoTribunal;

    public function init()
    {
        static::$nomeJuiz = app(Faker::class)->name;
    }

    public function testInsert()
    {
        $this->init();
        $nomej = static::$nomeJuiz;

        $this->browse(function (Browser $browser) use ($nomej) {
            $browser->visit('/juizes')
                ->clickLink('Novo')
                ->type('nome', $nomej)
                ->press('Gravar')
                ->assertSee('Gravado com sucesso')
                ->assertSee($nomej);
        });
        //app(TribunaisRepository::class)->deleteByName($nome);
    }

    public function testBusca()
    {
        /*$nomej = static::$nomeJuiz;
        $abrevt =  static::$abreviacaoTribunal;

        $this->browse(function (Browser $browser) use ($nomej){
            $browser->visit('/tribunais')
//                ->clickLink('Novo')
                ->type('pesquisa', $nomet)
//                ->type('abreviacao', $abrevt)
                ->clickLink('****')
                ->assertSeeIn('table',$nomet);
        });*/
    }
}
