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

Route::group(['prefix' => '/acoes'], function () {
    Route::get('/', 'Acoes@create')->name('acoes.create');

    Route::post('/', 'Acoes@store')->name('acoes.store');
});

Route::group(['prefix' => '/juizes'], function () {
    Route::get('/', 'Juizes@create')->name('juizes.create');

    Route::post('/', 'Juizes@store')->name('juizes.store');
});

Route::group(['prefix' => '/tipos_juizes'], function () {
    Route::get('/', 'Tipos_Juizes@create')->name('tipos_juizes.create');

    Route::post('/', 'Tipos_Juizes@store')->name('tipos_juizes.store');
});
