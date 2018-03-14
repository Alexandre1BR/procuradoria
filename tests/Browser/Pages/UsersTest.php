<?php

namespace Tests\Browser;

use App\Data\Repositories\Users as UsersRepository;
use Faker\Generator as Faker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UsersTest extends DuskTestCase
{
    private static $personalEmailUsers;
    private static $randomUserUsers;
    private static $NameUsers;

    public function init()
    {
        $faker = app(Faker::class);
        static::$personalEmailUsers = $faker->email;
        static::$NameUsers = $faker->name;
        static::$randomUserUsers = $faker->randomElement(app(UsersRepository::class)->all()->toArray());
    }

    public function testValidation()
    {
        $this->init();

        $randomUserU = static::$randomUserUsers;
        $NameU = static::$NameUsers;

        $this->browse(function (Browser $browser) use ($randomUserU, $NameU) {
            $browser->visit('/users/'.$randomUserU['id'])
//                ->screenshot('testValidation1')
                ->click('#editar')
                ->type('#personal_email', $NameU)
                ->press('Gravar')
                ->assertSee('O campo Email pessoal não contém um endereço de email válido.');
//                ->screenshot('testValidation2');
        });
    }

    public function testAlter()
    {
        $personalEmailU = static::$personalEmailUsers;
        $randomUserU = static::$randomUserUsers;

        $this->browse(function (Browser $browser) use ($personalEmailU, $randomUserU) {
            $browser->visit('/users/'.$randomUserU['id'])
//                ->screenshot('testAlter1')
                ->click('#editar')
                ->type('#personal_email', $personalEmailU)
//                ->screenshot('testAlter2')
                ->press('Gravar')
                ->assertSee('Gravado com sucesso');
//                ->screenshot('testAlter3');
        });
    }

    public function testRoute()
    {
        $personalEmailU = static::$personalEmailUsers;
        $randomUserU = static::$randomUserUsers;

        $this->browse(function (Browser $browser) use ($personalEmailU, $randomUserU) {
            $browser->visit('/users')
//                ->screenshot('testRoute1')
                ->clickLink($randomUserU['name'])
                ->assertPathIs('/users/'.$randomUserU['id'])
                ->assertSee($randomUserU['email']);
//                ->screenshot('testRoute2');
        });
    }
}
