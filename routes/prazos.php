<?php

Route::group(['prefix' => '/tipos_usuarios'], function () {
    Route::get('/', 'TiposUsuarios@create')->name('tipos_usuarios.create');

    Route::post('/', 'TiposUsuarios@store')->name('tipos_usuarios.store');
});
