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
        $response = $this->get('/');
        dd($response);
        $this->get('/')->assertRedirect('/login');
    }

    public function testLoginResponse()
    {

        //$this->withoutMiddleware();

        $response = $this->get('/login');

        $response->assertStatus(200);

        $response->assertSee('Login Alerj');
    }
}
