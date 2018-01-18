<?php

Route::group(['prefix' => '/juizes'], function () {
    Route::get('/', 'Juizes@create')->name('juizes.create');

    Route::post('/', 'Juizes@store')->name('juizes.store');
});

Route::group(['prefix' => '/tiposjuizes'], function () {
    Route::get('/', 'TiposJuizes@create')->name('tipos_juizes.create');

    Route::post('/', 'TiposJuizes@store')->name('tipos_juizes.store');
});
