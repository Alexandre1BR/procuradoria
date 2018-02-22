<?php

namespace Tests\Feature;

use Tests\TestCase;

class JuizesTest extends TestCase
{
//    public function testInsert()
//    {
//        $response = $this->visit('/juizes/create')->see('Juizes');
//
//        $response->press('Gravar');
//
//        $response->assertSee('é obrigatório');
//    }

    public function testInsert2()
    {
        $response = $this->get('/juizes/create');

        //$response->press('Gravar');

        $response->assertSee('Nome');
        $response->assertSee('Lotação');
        $response->assertSee('Tipo juiz');
    }
/*
    public function testCheck()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

        $response->assertSee('Ju');
    }

    public function testAlter()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

        $response->assertSee('Ju');
    }

    public function testRequired()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

        $response->assertSee('Ju');
    }

    public function test()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

        $response->assertSee('Ju');
    }
*/
}