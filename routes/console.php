<?php

use App\Data\Repositories\Users;

Artisan::command('procuradoria:import:processos {usersFile} {processesFile}', function ($usersFile, $processesFile) {
    app(\App\Services\Import::class)->execute($usersFile, $processesFile, $this);
})->describe('Import all processes from an excel file');

Artisan::command('procuradoria:fix-users-names', function () {
    $repository = app(Users::class);

    $repository->all()->each(function ($user) use ($repository) {
        $original = $user->name;

        $user = $repository->updateUserNameFromLdap($user);

        if ($user->name !== $original) {
            $this->info("{$user->name} = {$original}");
        }
    });
})->describe('Fix users names');
