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

Route::get('/api/demo', function () {
    return view('welcome');

    // Controlador Personas
Route::get('/api/persona','PersonasController@index');
Route::post('/api/persona/guardar','PersonasController@store')->name('guardar');
Route::put('/api/persona/actualizar','PersonasController@update')->name('actualizar');
Route::delete('/api/persona/eliminar','PersonasController@delete')->name('eliminar');
    // Controlador  Temperaturas
Route::get('/api/temp','TemperaturasController@index');
Route::post('/api/temp/guardar','TemperaturasController@store')->name('guardar');
Route::put('/api/temp/actualizar','TemperaturasController@update')->name('actualizar');
Route::delete('/api/temp/eliminar','TemperaturasController@delete')->name('eliminar');
});
