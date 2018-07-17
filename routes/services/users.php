<?php
Route::group(['prefix' => '/users'], function () {
    Route::get('/', 'Users@index')->name('users.index');

    Route::get('/{id}/enable', 'Users@enable')->name('users.enable');

    Route::get('/{id}/disable', 'Users@disable')->name('users.disable');

    Route::post('/', 'Users@store')->name('users.store');

    //show
    Route::get('/{id}', 'Users@show')->name('users.show');
});

Route::get('/assessores', 'Users@assessores')->name('usuarios.assessores');

Route::get('/estagiarios', 'Users@estagiarios')->name('usuarios.estagiarios');

Route::get('/procuradores', 'Users@procuradores')->name('usuarios.procuradores');
