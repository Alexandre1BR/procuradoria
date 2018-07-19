<?php

namespace Tests\Browser;

use App\Data\Repositories\Users as UsersRepository;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

//class LoginTest extends DuskTestCase
//{
//    public function testWrongLogin()
//    {
//        $this->browse(function (Browser $browser) {
//            $browser->visit('/login')
//                ->type('email', '123')
//                ->type('password', '123')
//                ->press('Login')
//                ->assertSee('Credenciais informadas não correspondem com nossos registros.');
//        });
//    }

//    public function testRightLoginAndLogout()
//    {
/*  $user = 'transporteop';
          $this->browse(function (Browser $browser) use ($user) {
              $browser->loginAs(app(UsersRepository::class)->findUserByEmail($user.'@alerj.rj.gov.br'))
                  ->visit('/')
                 // ->waitForText($user)
                //  ->assertSee($user)
                  ->clickLink($user)
                  ->clickLink('Sair')
                  ->visit('/')
                 // ->assertDontSee($user)
                  ->clickLink('Login')
                  ->assertPathIs('/login');
          });*/
//    }
//}
