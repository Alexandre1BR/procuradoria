<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class ProcessosValidationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        Session::start();
        $this->tipoMeioValorVazio();
        $this->tipoMeioValorMaior();
        $this->tipoMeioValorAlfanumerico();
        $this->tipoMeioViolandoChaveEstrangeria();
    }

    public function tipoMeioValorVazio()
    {
        $response = $this->withHeader('X-CSRF-TOKEN', csrf_token())->json('POST', '/processos', [
            'tipo_meio_id'    => null,
            'numero_judicial' => 123,
            'autor'           => 'Alexandre',
            'reu'             => 'Bruno',
        ]);

        $response->assertSee("O campo Meio deve conter um valor num\u00e9rico.");
        $response->assertSee("O campo Meio \u00e9 obrigat\u00f3rio.");

        dump('tipo_meio_id = null → Campo obrigatório');
        dump('');
        dump(json_decode($response->getContent()));
        dump('------------------------------------------');
    }

    public function tipoMeioValorMaior()
    {
        $response = $this->json('POST', '/processos', [
            'tipo_meio_id'    => '100',
            'numero_judicial' => 123,
            'autor'           => 'Alexandre',
            'reu'             => 'Bruno',
        ]);

        $response->assertSee("O campo Meio n\u00e3o pode conter um valor superior a 99.");

        dump("tipo_meio_id = 100 → Testando 'Insertion Code' ");
        dump('');
        dump(json_decode($response->getContent()));

        dump('------------------------------------------');
    }

    public function tipoMeioValorAlfanumerico()
    {
        $response = $this->json('POST', '/processos', [
            'tipo_meio_id'    => 'A',
            'numero_judicial' => 123,
            'autor'           => 'Alexandre',
            'reu'             => 'Bruno',
        ]);
        $response->assertSee("O campo Meio deve conter um valor num\u00e9rico.");

        dump('tipo_meio_id = A → Testando se aceita apenas números');
        dump('');
        dump(json_decode($response->getContent()));

        dump('------------------------------------------');
    }

    public function tipoMeioViolandoChaveEstrangeria()
    {
        $response = $this->json('POST', '/processos', [
            'tipo_meio_id'    => '4',
            'numero_judicial' => 123,
            'autor'           => 'Alexandre',
            'reu'             => 'Bruno',
        ]);
        $response->assertSee("O valor selecionado para o campo Meio \u00e9 inv\u00e1lido.");

        dump('tipo_meio_id = 4 → Testando se o valor existe na base de dados [foreign key]');
        dump('');
        dump(json_decode($response->getContent()));

        dump('------------------------------------------');
    }
}
