<?php

Route::group(['prefix' => '/termos'], function () {
    //INDEX
    Route::get('/', 'SearchTerms@index')->name('search_terms.index');

    //Create and Store
    Route::get('/create', 'SearchTerms@create')->name('search_terms.create');
    Route::post('/', 'SearchTerms@store')->name('search_terms.store');

    //show
    Route::get('/{id}', 'SearchTerms@show')->name('search_terms.show');
});
