<?php

Route::group(['prefix' => '/andamentos'], function () {
    Route::get('/create', 'Andamentos@create')->name('andamentos.create');

    Route::post('/', 'Andamentos@store')->name('andamentos.store');

    Route::get('/', 'Andamentos@index')->name('andamentos.index');

    Route::get('/detail', 'Andamentos@detail')->name('andamentos.detail');
});
