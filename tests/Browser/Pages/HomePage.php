<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class HomePage extends Page
{

    public function url()
    {
        return '/';
    }

    public function assert(Browser $browser)
    {
        //
    }

    public function elements()
    {
        return [
            '@element' => '#selector',
        ];
    }
}
