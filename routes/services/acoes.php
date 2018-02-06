<?php

Route::group(['prefix' => '/acoes'], function () {
    Route::get('/create', 'Acoes@create')->name('acoes.create');

    Route::post('/', 'Acoes@store')->name('acoes.store');

    Route::get('/{id}', 'Acoes@show')->name('acoes.show');

    Route::get('/', 'Acoes@index')->name('acoes.index');

    Route::post('/', 'Acoes@index')->name('acoes.index.post');
});
