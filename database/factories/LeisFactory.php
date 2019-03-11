<?php

use App\Data\Models\Lei as LeiModel;
use App\Data\Models\ProcessoLei as ProcessoLeiModel;
use App\Data\Repositories\Leis as LeisRepository;
use App\Data\Repositories\NiveisFederativos as NiveisFederativosRepository;
use App\Data\Repositories\Processos as ProcessosRepository;
use App\Data\Repositories\TiposLeis as TiposLeisRepository;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(LeiModel::class, function (Faker $faker) {
    return [
        'numero_lei' =>
            (string) $faker->randomNumber(4) .
            '/' .
            (string) $faker->randomNumber(4),
        'autor' => $faker->name,
        'assunto' => $faker->name,
        'link' => $faker->name,
        'artigo' => (string) $faker->randomNumber(2),
        'paragrafo' => (string) $faker->randomNumber(2),
        'inciso' => (string) $faker->randomNumber(2),
        'alinea' => (string) $faker->randomNumber(2),
        'item' => (string) $faker->randomNumber(2),
        'nivel_federativo_id' => $faker->randomElement(
            app(NiveisFederativosRepository::class)
                ->all()
                ->toArray()
        )['id'],
        'tipo_lei_id' => $faker->randomElement(
            app(TiposLeisRepository::class)
                ->all()
                ->toArray()
        )['id'],
    ];
});

$factory->define(ProcessoLeiModel::class, function (Faker $faker) {
    return [
        'processo_id' => $faker->randomElement(
            app(ProcessosRepository::class)
                ->all()
                ->toArray()
        )['id'],
        'lei_id' => $faker->randomElement(
            app(LeisRepository::class)
                ->all()
                ->toArray()
        )['id'],
    ];
});
