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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Rutas Triaje*/

Route::resource('dashboard/triaje','Dashboard\TriajeController');

Route::get('listarCita', 'Dashboard\TriajeController@listarCita');

Route::get('/triaje/eliminar','Dashboard\TriajeController@destroy');

Route::get('/triaje/getIdCita/{id_cita}','Dashboard\TriajeController@getIdCita');

/*End Rutas Triaje*/

