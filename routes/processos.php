<?php

Route::group(['prefix' => '/processos'], function () { //www.procuradoria.test/processos
    Route::get('/', 'Processos@create')->name('processos.create');

    Route::post('/', 'Processos@store')->name('processos.store');
});

// "name" serve pra atender o método route do Laravel no HTML. Vide : /resource/view/processos/create.blade.php
//exemplo {{ route('processos.create') }}
