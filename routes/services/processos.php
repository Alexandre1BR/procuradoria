<?php
Route::group(['prefix' => '/processos'], function () {
    //www.procuradoria.test/processos
    //Index

    //Create and Store
    Route::get('/', 'Processos@create')->name('processos.create');
    Route::post('/', 'Processos@store')->name('processos.store');

    // Search and Detail
    Route::get('/search', 'Processos@search')->name('processos.search');

    //    Route::post('/resultSearch', 'Processos@resultSearch')->name('processos.resultSearch');

    //    Route::get('/resultSearch', 'Processos@search')->name('processos.search');

    Route::get('/{id}', 'Processos@show')->name('processos.show');

    Route::post('/apensar', 'Processos@apensar')->name('processos.apensar');

    Route
        ::post('/relacionarLei', 'Processos@relacionarLei')
        ->name('processos.relacionarLei');
});

// "name" serve pra atender o método route do Laravel no HTML. Vide : /resource/view/processos/form.blade.php
//exemplo {{ route('processos.create') }}
