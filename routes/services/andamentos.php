<?php

Route::group(['prefix' => '/andamentos'], function () {


    Route::get('/', 'Andamentos@create')->name('andamentos.create');

    Route::post('/', 'Andamentos@store')->name('andamentos.store');

    Route::get('/search', 'Andamentos@index')->name('andamentos.index');

    Route::get('/detail', 'Andamentos@detail')->name('andamentos.detail');
});
