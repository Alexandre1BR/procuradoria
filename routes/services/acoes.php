<?php

Route::group(['prefix' => '/acoes'], function () {
    Route::get('/create', 'Acoes@create')->name('acoes.create');

    Route::post('/', 'Acoes@store')->name('acoes.store');

    Route::get('/detail', 'Acoes@detail')->name('acoes.detail');

    Route::get('/', 'Acoes@index')->name('acoes.index');
});
