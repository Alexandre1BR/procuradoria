<?php

Route::group(['prefix' => '/juizes'], function () {
    Route::get('/create', 'Juizes@create')->name('juizes.create');

    Route::post('/', 'Juizes@store')->name('juizes.store');

    Route::get('/', 'Juizes@index')->name('juizes.index');

    Route::get('/detail', 'Juizes@detail')->name('juizes.detail');
});

Route::group(['prefix' => '/tiposjuizes'], function () {
    Route::get('/', 'TiposJuizes@create')->name('tipos_juizes.create');

    Route::post('/', 'TiposJuizes@store')->name('tipos_juizes.store');
});
