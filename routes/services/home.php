<?php
use App\Support\Constants;

Route::get('/', 'Home@index')->name('home.index');

Route::post('/', 'Home@filter')->name('home.filter');
