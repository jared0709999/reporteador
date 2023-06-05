<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/principal', function () {
    return view('menu');
});

Route::get('/reporte', 'App\Http\Controllers\ReportesController@index');

Route::get('/rf01', 'App\Http\Controllers\rf01Controller@index');

Route::get('/rf02', 'App\Http\Controllers\rf02Controller@index');

Route::get('/rf03', 'App\Http\Controllers\rf03Controller@index');

Route::post('/pruebas', 'App\Http\Controllers\Rf02EquidadController@index')->name('pruebas');

Route::post('/pruebas3', 'App\Http\Controllers\Rf03servicioController@index')->name('pruebas3');
