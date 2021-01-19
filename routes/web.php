<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaEMController;

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

Route::get('em/citas/{id}', 'EM\CitaEMController@index');

//Route::get('em/atenciones/{id}', 'EM\AtencionesEMController@index');

Route::resource('em/citas', 'EM\CitaEMController');

Route::resource('em/diagnostico', 'EM\DiagnosticoEMController');

Route::post('em/citas/{idEsp}/filtrarFecha', 'EM\CitaEMController@filtrarFecha');

Route::post('em/citas/{idEsp}/filtrarDni', 'EM\CitaEMController@filtrarDni');

Route::get('em/diagnostico/{dni}/{fecha}/{nombre}/{apellido}', 'EM\DiagnosticoEMController@mostrarCita');

Route::get('em/citas/{id}/registrar', 'EM\CitaEMController@registrar');