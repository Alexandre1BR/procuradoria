<?php

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

$factory->define(App\Data\Models\Processo::class, function (Faker $faker) {
    return [
        'numero_judicial' => $faker->randomNumber(),
        'numero_alerj'    => $faker->randomNumber(),
        'tribunal_id'     => function () {
            return factory(\App\Data\Models\Tribunal::class)->create()->id;
        },
        'vara'              => $faker->name, //'origem_complemento' => $faker->name,
        'data_distribuicao' => $faker->date('Y-m-d h:m:i'),
        'acao_id'           => function () {
            return factory(\App\Data\Models\Acao::class)->create()->id;
        },
        'relator_id' => function () {
            return factory(\App\Data\Models\Juiz::class)->create()->id;
        },
        'apensos_obs' => $faker->name,
        'juiz_id'     => function () {
            return factory(\App\Data\Models\Juiz::class)->create()->id;
        },
        'autor'         => $faker->name,
        'reu'           => $faker->name,
        'objeto'        => $faker->name,
        'merito'        => $faker->name,
        'liminar'       => $faker->name,
        'recurso'       => $faker->name,
        'procurador_id' => function () {
            return factory(\App\Data\Models\User::class)->create()->id;
        },
        'estagiario_id' => function () {
            return factory(\App\Data\Models\User::class)->create()->id;
        },
        'assessor_id' => function () {
            return factory(\App\Data\Models\User::class)->create()->id;
        },
        'tipo_meio_id' => function () {
            return factory(\App\Data\Models\Meio::class)->create()->id;
        },
    ];
});
