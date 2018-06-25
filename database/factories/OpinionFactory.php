<?php
use Faker\Generator as Faker;

use App\Data\Models\Opinion as OpinionModel;
use App\Data\Models\OpinionScope as OpinionScopeModel;
use App\Data\Models\OpinionSubject as OpinionSubjectModel;
use App\Data\Models\OpinionType as OpinionTypeModel;

use App\Data\Repositories\OpinionScopes as OpinionScopesRepository;
use App\Data\Repositories\Users as UsersRepository;
use App\Data\Repositories\OpinionTypes as OpinionTypesRepository;

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

$factory->define(OpinionScopeModel::class, function (Faker $faker) {
    return ['name' => $faker->name];
});

$factory->define(OpinionSubjectModel::class, function (Faker $faker) {
    return ['name' => $faker->name];
});

$factory->define(OpinionTypeModel::class, function (Faker $faker) {
    return ['name' => $faker->name];
});

$factory->define(OpinionModel::class, function (Faker $faker) {
    return [
        'opinion_scope_id' =>
            $faker->randomElement(
                app(OpinionScopesRepository::class)
                    ->all()
                    ->toArray()
            )['id'],
        'opinion_type_id' =>
            $faker->randomElement(
                app(OpinionTypesRepository::class)
                    ->all()
                    ->toArray()
            )['id'],
        'attorney_id' =>
            $faker->randomElement(
                app(UsersRepository::class)
                    ->getByType('Procurador')
                    ->toArray()
            )['id'],
        'suit_number' => $faker->name,
        'suit_sheet' => $faker->name,
        'identifier' => $faker->name,
        'date' => $faker->date,
        'party' => $faker->name,
        'abstract' => $faker->text,
        'opinion' => $faker->text,
        'file' => $faker->name
    ];
});
