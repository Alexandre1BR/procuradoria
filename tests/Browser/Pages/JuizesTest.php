<?php

namespace Tests\Browser;

use App\Data\Repositories\TiposJuizes as TiposJuizesRepository;
use App\Data\Repositories\Tribunais as TribunaisRepository;
use Faker\Generator as Faker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class JuizesTest extends DuskTestCase
{
    private static $nomeJuiz;
    private static $tribunal;
    private static $tipoJuiz = '1';

    public function init()
    {
        $faker = app(Faker::class);
        static::$nomeJuiz = app(Faker::class)->name;

        static::$tribunal = $faker->randomElement(app(TribunaisRepository::class)->searchFromRequest()->toArray());
        static::$tipoJuiz = $faker->randomElement(app(TiposJuizesRepository::class)->all()->toArray());
    }

    public function testInsert()
    {
        $this->init();
        $nomej = static::$nomeJuiz;
        $tribunal = static::$tribunal;
        $tipoJuiz = static::$tipoJuiz;

        $this->browse(function (Browser $browser) use ($nomej, $tribunal, $tipoJuiz) {
            $browser->visit('/juizes')
                ->clickLink('Novo')
                ->type('nome', $nomej)
                ->select('lotacao_id', $tribunal['id'])
                ->select('tipo_juiz_id', $tipoJuiz['id'])
                ->press('Gravar')
                ->assertSee('Gravado com sucesso')
                ->assertSee($nomej);
        });
    }

    public function testValidation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/juizes')
                ->clickLink('Novo')
//                ->type('nome', $nomet)
//                ->assertSee('ASDADDDD')

//                ->type('abreviacao', $abrevt)

                ->press('Gravar')
                ->assertSee('O campo Nome é obrigatório.')
                ->assertSee('O campo Lotação é obrigatório.')
                ->assertSee('O campo Tipo juiz é obrigatório.');
        });
    }

    public function testWrongSearch()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/juizes')
                ->type('pesquisa', '45879349875348975387958973489734897345893478957984')
//                ->assertInputValue('pesquisa',$nomet)
//                ->type('abreviacao', $abrevt)
                ->click('#searchButton')
                ->waitForText('Nenhum juiz encontrado')
                ->assertSee('Nenhum juiz encontrado');
//                ->assertSeeIn('table',$nomet);
        });
    }

    public function testRightSearch()
    {
        $nomej = static::$nomeJuiz;

        $this->browse(function (Browser $browser) use ($nomej) {
            $browser->visit('/juizes')
//                ->type('abreviacao', $abrevt)
                ->type('pesquisa', $nomej)
                ->click('#searchButton')
                ->waitForText($nomej)
                ->assertSeeIn('table', $nomej);
        });
    }
}
