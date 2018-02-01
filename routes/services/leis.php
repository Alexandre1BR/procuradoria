<?php

Route::group(['prefix' => '/leis'], function () {
    Route::get('/create/{processo_id?}', 'Leis@create')->name('leis.create');

    Route::post('/', 'Leis@store')->name('leis.store');

    Route::get('/', 'Leis@index')->name('leis.index');

    Route::get('/{id}', 'Leis@show')->name('leis.show');

});

