<?php

Route::group(['prefix' => '/processos'], function () { //www.procuradoria.test/processos
    Route::get('/', 'Processos@create')->name('processos.create');

    Route::post('/', 'Processos@store')->name('processos.store');

    Route::get('/search', 'Processos@search')->name('processos.search');

//    Route::post('/resultSearch', 'Processos@resultSearch')->name('processos.resultSearch');

//    Route::get('/resultSearch', 'Processos@search')->name('processos.search');

    Route::get('/detail', 'Processos@detail')->name('processos.detail');
});

// "name" serve pra atender o método route do Laravel no HTML. Vide : /resource/view/processos/create.blade.php
//exemplo {{ route('processos.create') }}
