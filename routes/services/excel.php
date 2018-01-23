<?php

Route::group(['prefix' => '/excel'], function () {
    Route::get('/importExport', 'Excel@importExport')->name('importExport');

    Route::post('/importExcel', 'Excel@importExcel')->name('importExcel');
});
