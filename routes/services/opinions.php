<?php
Route::group(['prefix' => '/opinioes'], function () {
    Route::get('/create', 'Opinions@create')->name('opinions.create');

    Route::post('/', 'Opinions@store')->name('opinions.store');

    Route::get('/{id}', 'Opinions@show')->name('opinions.show');

    Route
        ::get('/{id}/{fileName}', 'Opinions@download')
        ->name('opinions.download');

    Route::get('/', 'Opinions@index')->name('opinions.index');

    Route
        ::post('/relacionarAssunto', 'Opinions@relacionarAssunto')
        ->name('opinions.relacionarAssunto');
});

Route::group(['prefix' => '/assuntos'], function () {
    Route
        ::get('/create', 'OpinionSubjects@create')
        ->name('opinionSubjects.create');

    Route::post('/', 'OpinionSubjects@store')->name('opinionSubjects.store');

    Route::get('/{id}', 'OpinionSubjects@show')->name('opinionSubjects.show');

    Route::get('/', 'OpinionSubjects@index')->name('opinionSubjects.index');
});
