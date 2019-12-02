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


Route::get('/exportar', 'ExcelController@exportar');

Route::get('/exportar_click', 'ExcelController@exportarClick');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/import-excel', 'ExcelController@importUsers');

Route::get('/eliminardata', 'ExcelController@eliminar');
