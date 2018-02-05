<?php

Artisan::command('procuradoria:import:processos {usersFile} {processesFile}', function ($usersFile, $processesFile) {
    app(\App\Services\Import::class)->execute($usersFile, $processesFile, $this);
})->describe('Import all processes from an excel file');
