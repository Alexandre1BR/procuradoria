<?php

Route::group(['prefix' => '/tribunais'], function () {
    Route::get('/', 'Tribunais@index')->name('tribunais.index');

    Route::get('/create', 'Tribunais@create')->name('tribunais.create');

    Route::post('/', 'Tribunais@store')->name('tribunais.store');

    Route::get('/detail', 'Tribunais@detail')->name('tribunais.detail');


});
