<?php
Route::group(['prefix' => '/revisions'], function () {
    Route::get('/', 'Revisions@index')->name('revisions.index');

    Route::get('/{id}', 'Revisions@show')->name('revisions.show');
});
