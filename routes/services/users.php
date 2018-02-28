<?php

Route::group(['prefix' => '/users'], function () {
    Route::get('/', 'Users@index')->name('users.index');

    Route::get('/alterarStatus/{user_email?}', 'Users@alterarStatus')->name('users.alterarStatus');
});
