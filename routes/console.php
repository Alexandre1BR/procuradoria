<?php

Artisan::command('procuradoria:import:processos {usersFile} {processesFile}', function ($usersFile, $processesFile) {
    (new \App\Services\Import())->execute($usersFile, $processesFile, $this);
})->describe('Import all processes from an excel file');
