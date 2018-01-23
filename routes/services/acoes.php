<?php

Route::group(['prefix' => '/acoes'], function () {
    Route::get('/create', 'Acoes@create')->name('acoes.create');

    Route::post('/', 'Acoes@store')->name('acoes.store');

    Route::get('/show', 'Acoes@detail')->name('acoes.show');

    Route::get('/', 'Acoes@index')->name('acoes.index');
});
