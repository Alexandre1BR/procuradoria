<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    use WithoutMiddleware;

    public function testRedirectToLoginResponse()
    {
        //$this->withoutMiddleware();

        $this->get('/')->assertRedirect('/login');
    }

    public function testLoginResponse()
    {

        //$this->withoutMiddleware();

        $response = $this->get('/login1');

        $response->assertStatus(200);

        $response->assertSee('Login Alerj');
    }
}
