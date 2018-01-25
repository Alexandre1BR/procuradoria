<?php

Route::group(['prefix' => '/juizes'], function () {
    Route::get('/create', 'Juizes@create')->name('juizes.create');

    Route::post('/', 'Juizes@store')->name('juizes.store');

    Route::get('/', 'Juizes@index')->name('juizes.index');

    Route::get('/{id}', 'Juizes@detail')->name('juizes.show');

    Route::get('/', 'Juizes@index')->name('juizes.index');
});

Route::group(['prefix' => '/tiposjuizes'], function () {
    Route::get('/', 'TiposJuizes@create')->name('tipos_juizes.create');

    Route::post('/', 'TiposJuizes@store')->name('tipos_juizes.store');
});
