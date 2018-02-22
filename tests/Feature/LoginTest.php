<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginTest extends TestCase
{
    public function testRedirectToLoginResponse()
    {
        $this->get('/')->assertRedirect('/login');
    }

    public function testLoginResponse()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

        $response->assertSee('Login Alerj');
    }
}
