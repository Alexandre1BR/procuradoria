<?php

Route::group(['prefix' => '/users'], function () {
    Route::get('/', 'Users@index')->name('users.index');
});
