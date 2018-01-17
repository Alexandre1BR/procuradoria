<?php

Route::group(['prefix' => '/juizes'], function () {
    Route::get('/', 'Juizes@create')->name('juizes.create');

    Route::post('/', 'Juizes@store')->name('juizes.store');
});

Route::group(['prefix' => '/tipos_juizes'], function () {
    Route::get('/', 'Tipos_Juizes@create')->name('tipos_juizes.create');

    Route::post('/', 'Tipos_Juizes@store')->name('tipos_juizes.store');
});
