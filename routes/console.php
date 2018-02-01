<?php

Artisan::command('procuradoria:import:processos {file}', function ($file) {
    (new \App\Services\Import())->importExcel($file, $this);
})->describe('Import all processes from an excel file');
