<?php

namespace Tests\Browser;

use App\Data\Repositories\Processos as ProcessosRepository;
use Faker\Generator as Faker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RevisionsTest extends DuskTestCase
{
    public function testVisit()
    {
        $this->browse(function (Browser $browser){
            $browser->visit('/revisions')
//                ->screenshot('1')
                ->assertSee('Revisões');
        });
    }
}
