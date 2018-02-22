<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use App\Data\Repositories\Users as UsersRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    public function testWrongLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', '123')
                ->type('password', '123')
                ->press('Login')
//                ->waitForText('Credenciais informadas não correspondem com nossos registros.')
                ->assertSee('Credenciais informadas não correspondem com nossos registros.');
        });
    }

    public function testRightLoginAndLogout()
    {
        $user = 'transporteop';
        $this->browse(function (Browser $browser) use($user) {
            $browser->loginAs(app( UsersRepository::class)->findUserByEmail($user.'@alerj.rj.gov.br'))
                ->visit('/')
                ->waitForText($user)
                ->assertSee($user)
                ->clickLink($user)
                ->clickLink('Sair')
                ->visit('/')
                ->assertDontSee($user)
                ->clickLink('Login')
                ->assertPathIs('/login');
        });
    }
}
