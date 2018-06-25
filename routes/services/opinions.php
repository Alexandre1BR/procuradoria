<?php
Route::group(['prefix' => '/opinioes'], function () {
    Route::get('/create', 'Opinions@create')->name('opinions.create');

    Route::post('/', 'Opinions@store')->name('opinions.store');

    Route::get('/{id}', 'Opinions@show')->name('opinions.show');

    Route::get('/', 'Opinions@index')->name('opinions.index');
});
