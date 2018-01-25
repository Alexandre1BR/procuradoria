<?php

Route::group(['prefix' => '/andamentos'], function () {
    Route::get('/create', 'Andamentos@create')->name('andamentos.create');

    Route::post('/create', 'Andamentos@create_post')->name('andamentos.create_post');

    Route::post('/', 'Andamentos@store')->name('andamentos.store');

    Route::get('/', 'Andamentos@index')->name('andamentos.index');

    Route::get('/{id}', 'Andamentos@show')->name('andamentos.show');
});
