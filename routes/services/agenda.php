<?php

Route::group(['prefix' => '/agenda'], function () {
    Route::get('/', 'Agenda@index')->name('agenda.index');
});
