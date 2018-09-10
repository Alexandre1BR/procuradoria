<?php

namespace Tests\Browser;

use App\Data\Repositories\Leis as LeisRepository;
use App\Data\Repositories\Opinions as OpinionsRepository;
use App\Data\Repositories\OpinionScopes as OpinionScopesRepository;
use App\Data\Repositories\OpinionSubjects as OpinionSubjectsRepository;
use App\Data\Repositories\OpinionTypes as OpinionTypesRepository;
use App\Data\Repositories\Users as UsersRepository;
use Faker\Generator as Faker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class OpinionsTest extends DuskTestCase
{
    public function addProperty($object, $array)
    {
        return (object) array_merge($array, (array) $object);
    }

    public function generateRandomObjects(): array
    {
        $faker = app(Faker::class);

        $opinionTypesRepository = app(OpinionTypesRepository::class);
        $opinionScopesRepository = app(OpinionScopesRepository::class);
        $usersRepository = app(UsersRepository::class);
        $opinionsRepository = app(OpinionsRepository::class);
        $opinionSubjectsRepository = app(OpinionSubjectsRepository::class);

        $newOpinion = [];
        $newSubject = [];

        $attributes = $opinionsRepository->formAttributes();
        foreach ($attributes as $attr) {
            $newAttr = '';
            switch ($attr->type) {
                case 'string':
                    $newAttr = $faker->name;
                    break;
                case 'id':
                    $newAttr = $faker->randomElement(${$attr->modelName.'sRepository'}->all()->toArray())['id'];
                    break;
                case 'date':
                    $newAttr = $faker->date;
                    break;
            }
            $newOpinion[$attr->name] = $newAttr;
        }

        $attributes = $opinionSubjectsRepository->formAttributes();
        foreach ($attributes as $attr) {
            $newAttr = '';
            switch ($attr->type) {
                case 'string':
                    $newAttr = $faker->name;
                    break;
                case 'id':
                    $newAttr = $faker->randomElement(${$attr->modelName.'sRepository'}->all()->toArray())['id'];
                    break;
                case 'date':
                    $newAttr = $faker->date;
                    break;
            }
            $newSubject[$attr->name] = $newAttr;
        }

        $newOpinionsSubject = [];
        $newOpinionsSubject['opinion_id'] = $faker->randomElement($opinionsRepository->all()->toArray())['id'];
        $newOpinionsSubject['subject_id'] = $faker->randomElement($opinionSubjectsRepository->all()->toArray())['id'];

        $array = [];
        $array['opinion'] = $newOpinion;
        $array['opinionSubject'] = $newSubject;
        $array['opinionsSubject'] = $newOpinionsSubject;

        return $array;
    }

    public function testInsertOpinion()
    {
        $newOpinion = $this->generateRandomObjects()['opinion'];

        $opinionsRepository = app(OpinionsRepository::class);
        $attributes = $opinionsRepository->formAttributes();
        $toSee = $opinionsRepository->attributesShowing();

        $this->browse(function (Browser $browser) use ($newOpinion, $attributes) {
            $browser->visit('/opinioes')->clickLink('Novo');
            foreach ($attributes as $attr) {
                switch ($attr->type) {
                    case 'string':
                        $browser->type('#'.$attr->name, $newOpinion[$attr->name]);
                        break;
                    case 'id':
                        $browser->select('#'.$attr->name, $newOpinion[$attr->name]);
                        break;
                    case 'date':
                        $browser->keys('#'.$attr->name, $newOpinion[$attr->name]);
                        break;
                }
                $browser->press('Gravar')->assertSee('Gravado com sucesso');
            }
        });
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
