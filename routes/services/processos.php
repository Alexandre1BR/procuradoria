<?php

Route::group(['prefix' => '/processos'], function () { //www.procuradoria.test/processos
    //Index

    //Create and Store
    Route::get('/', 'Processos@create')->name('processos.create');
    Route::post('/', 'Processos@store')->name('processos.store');

    // Search and Detail
    Route::get('/search', 'Processos@search')->name('processos.search');
    Route::get('/detail', 'Processos@detail')->name('processos.detail');
});

// "name" serve pra atender o método route do Laravel no HTML. Vide : /resource/view/processos/create.blade.php
//exemplo {{ route('processos.create') }}
