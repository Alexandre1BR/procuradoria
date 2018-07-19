<?php

namespace Tests\Browser;

use App\Data\Repositories\Leis as LeisRepository;
use App\Data\Repositories\NiveisFederativos as NiveisFederativosRepository;
use App\Data\Repositories\Processos as ProcessosRepository;
use App\Data\Repositories\TiposLeis as TiposLeisRepository;
use App\Http\Controllers\Leis;
use Faker\Generator as Faker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LeisTest extends DuskTestCase
{
    private static $numero_lei;
    private static $autor;
    private static $assunto;
    private static $link;
    private static $artigo;
    private static $paragrafo;
    private static $inciso;
    private static $alinea;
    private static $item;
    private static $nivel_federativo;
    private static $tipo_lei;
    private static $processo;
    private static $insertProcessoId;
    private static $insertLeiId;

    public function insertProcesso()
    {
        $numeroJudicialP = static::$numero_lei;
        $autorP = static::$autor;
        $reuP = static::$assunto;

        $this->browse(function (Browser $browser) use ($numeroJudicialP, $autorP, $reuP) {
            $browser
                ->visit('/')
                ->clickLink('Novo')
                ->type('#numero_judicial', $numeroJudicialP)
                ->type('#autor', $autorP)
                ->type('#reu', $reuP)
                ->press('Gravar')
                ->waitForText('Gravado com sucesso', 40)
                ->waitForText($numeroJudicialP);
        });
    }

    public function init()
    {
        $faker = app(Faker::class);

        static::$numero_lei = (string) $faker->randomNumber(4).'/'.(string) $faker->randomNumber(4);

        static::$autor = $faker->name;
        static::$assunto = $faker->name;
        static::$link = $faker->name;

        static::$artigo = $faker->randomNumber(2);
        static::$paragrafo = $faker->randomNumber(2);
        static::$inciso = $faker->randomNumber(2);
        static::$alinea = $faker->randomNumber(2);
        static::$item = $faker->randomNumber(2);

        static::$nivel_federativo = (object) $faker->randomElement(
            app(NiveisFederativosRepository::class)
                ->all()
                ->toArray()
        );
        static::$tipo_lei = (object) $faker->randomElement(
            app(TiposLeisRepository::class)
                ->all()
                ->toArray()
        );

        $this->insertProcesso();
        static::$insertProcessoId = (app(ProcessosRepository::class)->maxId());
        static::$processo = (object) $faker->randomElement(
            app(ProcessosRepository::class)
                ->all()
                ->toArray()
        );
    }

    public function testVisit()
    {
        $this->init();

        $this->browse(function (Browser $browser) {
            $browser->visit('/leis')->assertSee('Leis');
        });
    }

    public function testInsert()
    {
        $numero_lei = static::$numero_lei;

        $autor = static::$autor;
        $assunto = static::$assunto;
        $link = static::$link;

        $artigo = static::$artigo;
        $paragrafo = static::$paragrafo;
        $inciso = static::$inciso;
        $alinea = static::$alinea;
        $item = static::$item;

        $nivel_federativo = static::$nivel_federativo;
        $tipo_lei = static::$tipo_lei;

        $this->browse(function (Browser $browser) use (
            $numero_lei,
            $autor,
            $assunto,
            $link,
            $artigo,
            $paragrafo,
            $inciso,
            $alinea,
            $item,
            $nivel_federativo,
            $tipo_lei
        ) {
            $browser
                ->visit('/leis')
                ->clickLink('Novo')
                ->select('nivel_federativo_id', $nivel_federativo->id)
                ->select('tipo_lei_id', $tipo_lei->id)
                ->type('#numero_lei', $numero_lei)
                ->type('#autor', $autor)
                ->type('#assunto', $assunto)
                ->type('#link', $link)
                ->type('#artigo', $artigo)
                ->type('#paragrafo', $paragrafo)
                ->type('#inciso', $inciso)
                ->type('#alinea', $alinea)
                ->type('#item', $item)
                ->press('Gravar')
                ->assertSee('Gravado com sucesso')
                ->waitForText($numero_lei);
        });

        static::$insertLeiId = (app(LeisRepository::class)->maxId());
    }

    public function testValidationRequiredFields()
    {
        $numero_lei = static::$numero_lei;
        $autor = static::$autor;
        $assunto = static::$assunto;

        $this->browse(function (Browser $browser) use ($numero_lei, $autor, $assunto) {
            $browser
                ->visit('/leis')
                ->clickLink('Novo')
                ->press('Gravar')
                ->assertSee('O campo Número lei é obrigatório.')
                ->assertSee('O campo Autor é obrigatório.')
                ->assertSee('O campo Assunto é obrigatório.')
                ->type('#numero_lei', $numero_lei)
                ->type('#autor', '')
                ->type('#assunto', '')
                ->press('Gravar')
                ->assertDontSee('O campo Número lei é obrigatório.')
                ->type('#numero_lei', '')
                ->type('#autor', $autor)
                ->type('#assunto', '')
                ->press('Gravar')
                ->assertDontSee('O campo Autor é obrigatório.')
                ->type('#numero_lei', '')
                ->type('#autor', '')
                ->type('#assunto', $assunto)
                ->press('Gravar')
                ->assertDontSee('O campo Assunto é obrigatório.');
        });
    }

    public function testValidationDoubleInsert()
    {
        $insertProcessoId = static::$insertProcessoId;
        $insertLeiId = static::$insertLeiId;
        $numero_lei = static::$numero_lei;

        $this->browse(function (Browser $browser) use ($numero_lei, $insertProcessoId, $insertLeiId) {
            $browser
                ->visit('/processos/'.$insertProcessoId)
                ->click('#editar')
                ->select('#lei_id', $insertLeiId)
                ->click('#buttonRelacionarLei')
                ->assertSee('Gravado com sucesso')
                ->assertSee($numero_lei)
                ->click('#editar')
                ->select('#lei_id', $insertLeiId)
                ->click('#buttonRelacionarLei')
                ->assertSee('A lei já está relacionada ao processo.');
        });
    }

    public function testWrongSearch()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/leis')
                ->type('pesquisa', '4587dfs9349875348975387958973sgd48973484')
                ->click('#searchButton')
                ->waitForText('Nenhuma lei encontrada')
                ->assertSee('Nenhuma lei encontrada');
        });
    }

    public function testRightSearch()
    {
        $numero_lei = static::$numero_lei;

        $this->browse(function (Browser $browser) use ($numero_lei) {
            $browser
                ->visit('/leis')
                ->type('pesquisa', $numero_lei)
                ->click('#searchButton')
                ->waitForText($numero_lei)
                ->assertSeeIn('table', $numero_lei);
        });
    }

    public function testAlter()
    {
        $numero_lei = static::$numero_lei;
        $insertLeiId = static::$insertLeiId;

        $this->browse(function (Browser $browser) use ($insertLeiId, $numero_lei) {
            $browser
                ->visit('/leis/'.$insertLeiId)
                ->click('#editar')
                ->type('#numero_lei', '*'.$numero_lei.'*')
                ->press('Gravar')
                ->assertSee('Gravado com sucesso')
                ->assertSee('*'.$numero_lei.'*');
        });
    }
}
