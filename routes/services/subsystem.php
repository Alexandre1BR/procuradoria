<?php

Route::group(['prefix' => '/subsystem'], function () {
    Route::get('/', 'Subsystem@index')->name('subsystem.index');

    Route
        ::get('/select/{subsystem}', 'Subsystem@select')
        ->name('subsystem.select');
});
