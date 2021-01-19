<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers;

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

Route::get('/registrarUsuario','Auth\RegisterController@getRegistrar');
Route::post('/registrarUsuario','Auth\RegisterController@postRegistrar');

Route::get('/medicos','UsuarioController@showMedicos');
Route::get('/enfermeros','UsuarioController@showEnfermeros');
Route::get('/administradores','UsuarioController@showAdministradores');
Route::get('/empresas','UsuarioController@showEmpresas');
Route::resource('/reservas','ReservaController');
// Route::get('/reservas/{dni_paciente}/edit','ReservaController@edit');


Route::get('/administrador/inicio','UsuarioController@showAdmInicio');

Route::get('/medicos/actualizar','UsuarioController@actualizarUsuario');
Route::post('/medicos/actualizar','UsuarioController@postactualizarUsuario');

Route::get('/enfermeros/actualizar','UsuarioController@actualizarUsuario');
Route::post('/enfermeros/actualizar','UsuarioController@postactualizarUsuario');

Route::get('/administradores/actualizar','UsuarioController@actualizarUsuario');
Route::post('/administradores/actualizar','UsuarioController@postactualizarUsuario');


Route::get('/home', 'HomeController@index')->name('home');

/*Rutas Triaje*/

Route::resource('dashboard/triaje','Dashboard\TriajeController');

Route::get('listarCita', 'Dashboard\TriajeController@listarCita');

Route::get('/triaje/eliminar','Dashboard\TriajeController@destroy');

Route::get('/triaje/getIdCita/{id_cita}','Dashboard\TriajeController@getIdCita');

/*End Rutas Triaje*/


Route::get('/empresas/actualizar','UsuarioController@actualizarUsuario');
Route::post('/empresas/actualizar','UsuarioController@postactualizarUsuario');

