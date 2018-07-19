<?php
namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RevisionsTest extends DuskTestCase
{
    public function testVisit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/revisions')->assertSee('Revisões');
        });
    }
}
