<?php

Route::group(['prefix' => '/errors'], function () {
    Route::get('/user-disabled', 'Errors@userDisabled')->name('errors.user-disabled');
});
