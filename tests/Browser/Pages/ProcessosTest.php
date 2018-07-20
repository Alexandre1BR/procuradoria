<?php

namespace Tests\Browser;

use App\Data\Repositories\Acoes as AcoesRepository;
use App\Data\Repositories\Juizes as JuizesRepository;
use App\Data\Repositories\Meios as MeiosRepository;
use App\Data\Repositories\Processos as ProcessosRepository;
use App\Data\Repositories\Tribunais as TribunaisRepository;
use App\Data\Repositories\Users as UsersRepository;
use Faker\Generator as Faker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProcessosTest extends DuskTestCase
{
    private static $numeroJudicialProcesso;
    private static $numeroAlerjProcesso;
    private static $tribunalProcesso;
    private static $varaProcesso;
    private static $dataDistribuicaoProcesso;
    private static $acaoProcesso;
    private static $juizProcesso;
    private static $autorProcesso;
    private static $relatorProcesso;
    private static $reuProcesso;
    private static $procuradorProcesso;
    private static $estagiarioProcesso;
    private static $assessorProcesso;
    private static $tipoMeioProcesso;
    private static $objetoProcesso;
    private static $meritoProcesso;
    private static $liminarProcesso;
    private static $apensosObsProcesso;
    private static $recursoObsProcesso;
    private static $observacaoProcesso;
    private static $linkProcesso;

    public function init()
    {
        $faker = app(Faker::class);
        static::$numeroJudicialProcesso = $faker->randomNumber();
        static::$numeroAlerjProcesso = $faker->randomNumber();
        static::$tribunalProcesso = $faker->randomElement(
            app(TribunaisRepository::class)
                ->all()
                ->toArray()
        );
        static::$varaProcesso = $faker->name;
        static::$dataDistribuicaoProcesso = $faker->date('m-d-Y');
        static::$acaoProcesso = $faker->randomElement(
            app(AcoesRepository::class)
                ->all()
                ->toArray()
        );
        static::$juizProcesso = $faker->randomElement(
            app(JuizesRepository::class)
                ->all()
                ->toArray()
        );
        static::$autorProcesso = $faker->name;
        static::$relatorProcesso = $faker->randomElement(
            app(JuizesRepository::class)
                ->all()
                ->toArray()
        );
        static::$reuProcesso = $faker->name;
        static::$procuradorProcesso = $faker->randomElement(
            app(UsersRepository::class)
                ->getByType('Procurador')
                ->toArray()
        );
        static::$estagiarioProcesso = $faker->randomElement(
            app(UsersRepository::class)
                ->getByType('Estagiario')
                ->toArray()
        );
        static::$assessorProcesso = $faker->randomElement(
            app(UsersRepository::class)
                ->getByType('Assessor')
                ->toArray()
        );
        static::$tipoMeioProcesso = $faker->randomElement(
            app(MeiosRepository::class)
                ->all()
                ->toArray()
        );
        static::$objetoProcesso = $faker->name;
        static::$meritoProcesso = $faker->name;
        static::$liminarProcesso = $faker->name;
        static::$apensosObsProcesso = $faker->name;
        static::$recursoObsProcesso = $faker->name;
        static::$observacaoProcesso = $faker->name;
        static::$linkProcesso = $faker->name;
    }

    public function testInsert()
    {
        $this->init();

        $numeroJudicialP = static::$numeroJudicialProcesso;
        $numeroAlerjP = static::$numeroAlerjProcesso;
        $tribunalP = static::$tribunalProcesso;
        $varaP = static::$varaProcesso;
        $dataDistribuicaoP = static::$dataDistribuicaoProcesso;
        $acaoP = static::$acaoProcesso;
        $juizP = static::$juizProcesso;
        $autorP = static::$autorProcesso;
        $relatorP = static::$relatorProcesso;
        $reuP = static::$reuProcesso;
        $procuradorP = static::$procuradorProcesso;
        $estagiarioP = static::$estagiarioProcesso;
        $assessorP = static::$assessorProcesso;
        $tipoMeioP = static::$tipoMeioProcesso;
        $objetoP = static::$objetoProcesso;
        $meritoP = static::$meritoProcesso;
        $liminarP = static::$liminarProcesso;
        $apensosObsP = static::$apensosObsProcesso;
        $recursoObsP = static::$recursoObsProcesso;
        $observacaoP = static::$observacaoProcesso;
        $linkP = static::$linkProcesso;

        $this->browse(function (Browser $browser) use (
            $numeroJudicialP,
            $numeroAlerjP,
            $tribunalP,
            $varaP,
            $dataDistribuicaoP,
            $acaoP,
            $juizP,
            $autorP,
            $relatorP,
            $reuP,
            $procuradorP,
            $estagiarioP,
            $assessorP,
            $tipoMeioP,
            $objetoP,
            $meritoP,
            $liminarP,
            $apensosObsP,
            $recursoObsP,
            $observacaoP,
            $linkP
        ) {
            $browser
                ->visit('/')
                ->clickLink('Novo')
                ->type('#numero_judicial', $numeroJudicialP)
                ->type('#numero_alerj', $numeroAlerjP)
                ->select('#tribunal_id', $tribunalP['id'])
                ->type('#vara', $varaP)
                ->keys('#data_distribuicao', $dataDistribuicaoP)
                ->select('#acao_id', $acaoP['id'])
                ->select('#juiz_id', $juizP['id'])
                ->type('#autor', $autorP)
                ->select('#relator_id', $relatorP['id'])
                ->type('#reu', $reuP)
                ->select('#procurador_id', $procuradorP['id'])
                ->select('#estagiario_id', $estagiarioP['id'])
                ->select('#assessor_id', $assessorP['id'])
                ->select('#tipo_meio', $tipoMeioP['id'])
                ->type('#objeto', $objetoP)
                ->type('#merito', $meritoP)
                ->type('#liminar', $liminarP)
                ->type('#apensos_obs', $apensosObsP)
                ->type('#recurso', $recursoObsP)
                ->type('#observacao', $observacaoP)
                ->type('#link', $linkP)
                ->press('Gravar')
                ->waitForText('Gravado com sucesso', 40)
                ->waitForText($numeroJudicialP)
                ->assertSee($numeroJudicialP)
                ->assertSee($numeroAlerjP)
                ->assertSee($tribunalP['abreviacao'])
                ->assertSee($autorP)
                ->assertSee($objetoP)
                ->assertSee($procuradorP['name'])
                ->assertSee($assessorP['name'])
                ->assertSee($estagiarioP['name']);
        });
    }

    public function testWrongSearch()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/')
                ->type(
                    'pesquisa',
                    '132312312vcxvdsf4142354346asfdb455756awsdgdn756867897887934645654'
                )
                ->pause('3000')
                ->waitForText('0 Processos')
                ->assertSee('0 Processos');
        });
    }

    public function testRightSearch()
    {
        $numeroJudicialP = static::$numeroJudicialProcesso;
        $numeroAlerjP = static::$numeroAlerjProcesso;
        $tribunalP = static::$tribunalProcesso;
        $varaP = static::$varaProcesso;
        $dataDistribuicaoP = static::$dataDistribuicaoProcesso;
        $acaoP = static::$acaoProcesso;
        $juizP = static::$juizProcesso;
        $autorP = static::$autorProcesso;
        $relatorP = static::$relatorProcesso;
        $reuP = static::$reuProcesso;
        $procuradorP = static::$procuradorProcesso;
        $estagiarioP = static::$estagiarioProcesso;
        $assessorP = static::$assessorProcesso;
        $tipoMeioP = static::$tipoMeioProcesso;
        $objetoP = static::$objetoProcesso;
        $meritoP = static::$meritoProcesso;
        $liminarP = static::$liminarProcesso;
        $apensosObsP = static::$apensosObsProcesso;
        $recursoObsP = static::$recursoObsProcesso;
        $observacaoP = static::$observacaoProcesso;
        $linkP = static::$linkProcesso;

        $this->browse(function (Browser $browser) use (
            $numeroJudicialP,
            $numeroAlerjP,
            $tribunalP,
            $varaP,
            $dataDistribuicaoP,
            $acaoP,
            $juizP,
            $autorP,
            $relatorP,
            $reuP,
            $procuradorP,
            $estagiarioP,
            $assessorP,
            $tipoMeioP,
            $objetoP,
            $meritoP,
            $liminarP,
            $apensosObsP,
            $recursoObsP,
            $observacaoP,
            $linkP
        ) {
            $browser
                ->visit('/')
                ->type('pesquisa', $numeroJudicialP)
                ->waitForText($numeroAlerjP)
                ->assertSee($numeroAlerjP);
        });
    }

    public function testValidation()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/')
                ->clickLink('Novo')
                ->select('#tipo_meio', '')
                ->press('Gravar')
                ->assertSee('O campo Número judicial é obrigatório.')
                ->assertSee('O campo Autor é obrigatório.')
                ->assertSee('O campo Réu é obrigatório.')
                ->assertSee('O campo Meio é obrigatório.');
        });
    }

    public function testAlter()
    {
        $faker = app(Faker::class);
        $ProcessoP = $faker->randomElement(
            app(ProcessosRepository::class)
                ->all()
                ->toArray()
        );
        $novoNumeroJudicialP = $faker->randomNumber();

        $novoDataDistribuicaoP = $faker->date('m-d-Y');
        $novoTribunalP = $faker->randomElement(
            app(TribunaisRepository::class)
                ->all()
                ->toArray()
        );
        $novoAutorP = $faker->name;
        $novoObjetoP = $faker->name;
        $novoProcuradorP = $faker->randomElement(
            app(UsersRepository::class)
                ->getByType('Procurador')
                ->toArray()
        );
        $novoAssessorP = $faker->randomElement(
            app(UsersRepository::class)
                ->getByType('Assessor')
                ->toArray()
        );
        $novoEstagiarioP = $faker->randomElement(
            app(UsersRepository::class)
                ->getByType('Estagiario')
                ->toArray()
        );

        $this->browse(function (Browser $browser) use (
            $ProcessoP,
            $novoNumeroJudicialP,
            $novoDataDistribuicaoP,
            $novoTribunalP,
            $novoAutorP,
            $novoObjetoP,
            $novoProcuradorP,
            $novoAssessorP,
            $novoEstagiarioP
        ) {
            $browser
                ->visit('/processos/'.$ProcessoP['id'])
                ->click('#editar')
                ->type('#numero_judicial', $novoNumeroJudicialP)
                ->select('#tribunal_id', $novoTribunalP['id'])
                ->keys('#data_distribuicao', $novoDataDistribuicaoP)
                ->type('#autor', $novoAutorP)
                ->select('#procurador_id', $novoProcuradorP['id'])
                ->select('#estagiario_id', $novoEstagiarioP['id'])
                ->select('#assessor_id', $novoAssessorP['id'])
                ->type('#objeto', $novoObjetoP)
                ->press('Gravar')
                ->assertSee('Gravado com sucesso', 30)
                ->waitForText($novoNumeroJudicialP)
                ->assertSee($novoNumeroJudicialP)
                ->assertSee($ProcessoP['numero_alerj'])
                ->assertSee($novoNumeroJudicialP)
                ->assertSee($novoTribunalP['abreviacao'])
                ->assertSee($novoAutorP)
                ->assertSee($novoObjetoP)
                ->assertSee($novoProcuradorP['name'])
                ->assertSee($novoAssessorP['name'])
                ->assertSee($novoEstagiarioP['name']);
        });
    }
}
