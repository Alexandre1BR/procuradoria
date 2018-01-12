<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/processos'], function () {
    Route::get('/', 'Processos@create')->name('processos.create');

    Route::post('/', 'Processos@store')->name('processos.store');
});

Route::group(['prefix' => '/tribunais'], function () {
    Route::get('/', 'Tribunais@create')->name('tribunais.create');

    Route::post('/', 'Tribunais@store')->name('tribunais.store');
});

Route::group(['prefix' => '/andamentos'], function () {
    Route::get('/', 'andamentos@create')->name('andamentos.create');

    Route::post('/', 'andamentos@store')->name('andamentos.store');
});
