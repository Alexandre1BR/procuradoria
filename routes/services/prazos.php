<?php
Route::group(['prefix' => '/tipos_prazos'], function () {
    Route::get('/', 'TiposPrazos@create')->name('tipos_prazos.create');

    Route::post('/', 'TiposPrazos@store')->name('tipos_prazos.store');
});
