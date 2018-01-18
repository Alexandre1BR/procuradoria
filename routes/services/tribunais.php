<?php

Route::group(['prefix' => '/tribunais'], function () {
    Route::get('/', 'Tribunais@create')->name('tribunais.create');

    Route::post('/', 'Tribunais@store')->name('tribunais.store');
});
