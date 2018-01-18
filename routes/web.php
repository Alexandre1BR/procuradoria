<?php

Auth::routes();

Route::get('/', function () {
    return view('home.index');
});

require __DIR__.'/services/home.php';

require __DIR__.'/services/processos.php';

require __DIR__.'/services/tribunais.php';

require __DIR__.'/services/acoes.php';

require __DIR__.'/services/andamentos.php';
