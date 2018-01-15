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

Auth::routes();

Route::get('/', function () {
    return view('welcome'); //www.procuradoria.test
});

Route::get('/home', 'HomeController@index')->name('home');

// "name" serve pra atender o método route do Laravel no HTML. Vide : /resource/view/processos/create.blade.php
//exemplo {{ route('processos.create') }}

Route::group(['prefix' => '/processos'], function () { //www.procuradoria.test/processos
    Route::get('/', 'Processos@create')->name('processos.create');
    Route::post('/', 'Processos@store')->name('processos.store');
});

Route::group(['prefix' => '/tipos_usuarios'], function () {
    Route::get('/', 'TiposUsuarios@create')->name('tipos_usuarios.create');
    Route::post('/', 'TiposUsuarios@store')->name('tipos_usuarios.store');
});

Route::group(['prefix' => '/tipos_prazos'], function () {
    Route::get('/', 'TiposPrazos@create')->name('tipos_prazos.create');
    Route::post('/', 'TiposPrazos@store')->name('tipos_prazos.store');
});
