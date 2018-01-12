<?php

Route::group(['prefix' => '/processos'], function () {
    Route::get('/', 'Processos@create')->name('processos.create');

    Route::post('/', 'Processos@store')->name('processos.store');
});
