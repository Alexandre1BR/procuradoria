<?php

Route::group(['prefix' => '/acoes'], function () {
    Route::get('/', 'Acoes@create')->name('acoes.create');

    Route::post('/', 'Acoes@store')->name('acoes.store');
});
