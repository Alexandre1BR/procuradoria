<?php

Route::group(['prefix' => '/buscas'], function () {
    Route::get('/', 'Buscas@index')->name('buscas.index');

    Route::get('/{id}/import', 'Buscas@import')->name('buscas.import');

    Route::get('/{id}/ignore', 'Buscas@ignore')->name('buscas.ignore');
});
