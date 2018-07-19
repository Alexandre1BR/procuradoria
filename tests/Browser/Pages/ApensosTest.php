<?php

namespace Tests\Browser;

use App\Data\Repositories\Processos as ProcessosRepository;
use Faker\Generator as Faker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ApensosTest extends DuskTestCase
{
    private static $apensoApenso;
    private static $apensadoApenso;

    public function init()
    {
        $faker = app(Faker::class);
        static::$apensoApenso = $faker->randomElement(
            app(ProcessosRepository::class)
                ->all()
                ->toArray()
        );
        static::$apensadoApenso = $faker->randomElement(
            app(ProcessosRepository::class)
                ->all()
                ->toArray()
        );

        while (static::$apensoApenso['id'] == static::$apensadoApenso['id']) {
            static::$apensadoApenso = $faker->randomElement(
                app(ProcessosRepository::class)
                    ->all()
                    ->toArray()
            );
        }
    }

    public function testInsert()
    {
        $this->init();

        $apensoA = static::$apensoApenso;
        $apensadoA = static::$apensadoApenso;

        $this->browse(function (Browser $browser) use ($apensoA, $apensadoA) {
            $browser
                ->visit('/processos/'.$apensoA['id'])
                ->click('#editar')
                ->select('#apensado_id', $apensadoA['id'])
                ->click('#buttonApensar')
                ->assertSeeIn('#apensosTable', $apensadoA['numero_judicial'])
                ->visit('/processos/'.$apensadoA['id'])
                ->assertSeeIn('#apensosTable', $apensoA['numero_judicial']);
        });
    }
}
