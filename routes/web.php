<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CitaEMController;

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

Route::get('/inicio','UsuarioController@showInicio');

Route::get('/medicos/actualizar','UsuarioController@actualizarUsuario');
Route::post('/medicos/actualizar','UsuarioController@postactualizarUsuario');
Route::get('/medicos/eliminar','UsuarioController@eliminarUsuario');

Route::get('/enfermeros/actualizar','UsuarioController@actualizarUsuario');
Route::post('/enfermeros/actualizar','UsuarioController@postactualizarUsuario');
Route::get('/enfermeros/eliminar','UsuarioController@eliminarUsuario');

Route::get('/administradores/actualizar','UsuarioController@actualizarUsuario');
Route::post('/administradores/actualizar','UsuarioController@postactualizarUsuario');
Route::get('/administradores/eliminar','UsuarioController@eliminarUsuario');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('em/citas/{id}', 'EM\CitaEMController@index');

//Route::get('em/atenciones/{id}', 'EM\AtencionesEMController@index');

Route::resource('em/citas', 'EM\CitaEMController');

Route::resource('em/diagnostico', 'EM\DiagnosticoEMController');

Route::post('em/citas/{idEsp}/filtrarFecha', 'EM\CitaEMController@filtrarFecha');

Route::post('em/citas/{idEsp}/filtrarDni', 'EM\CitaEMController@filtrarDni');

Route::get('em/diagnostico/{dni}/{fecha}/{nombre}/{apellido}', 'EM\DiagnosticoEMController@mostrarCita');

Route::get('em/citas/{id}/registrar', 'EM\CitaEMController@registrar');
