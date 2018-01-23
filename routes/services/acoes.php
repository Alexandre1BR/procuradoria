<?php

Route::group(['prefix' => '/acoes'], function () {
    Route::get('/create', 'Acoes@create')->name('acoes.create');

    Route::post('/', 'Acoes@store')->name('acoes.store');

<<<<<<< HEAD
    Route::get('/show', 'acoes@detail')->name('acoes.show');
=======
    Route::get('/detail', 'Acoes@detail')->name('acoes.detail');
>>>>>>> upstream/master

    Route::get('/', 'Acoes@index')->name('acoes.index');
});
