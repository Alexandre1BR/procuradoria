<?php

Route::group(['prefix' => '/andamentos'], function () {
    Route::get('/', 'andamentos@create')->name('andamentos.create');

    Route::post('/', 'andamentos@store')->name('andamentos.store');
});
