<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    require __DIR__.'/home.php';

    require __DIR__.'/processos.php';

    require __DIR__.'/tribunais.php';

    require __DIR__.'/acoes.php';

    require __DIR__.'/juizes.php';
});
