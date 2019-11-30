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

use App\Http\Controllers\ArchivoController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/empleados','EmpleadoController@index');
//Route::get('/empleados/create', 'EmpleadoController@create');

Route::get('/inicio', function () {
    return view('/layouts/home');
});

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

//CREA LA DE TODOS LOS METODOS AUTOMATICAMENTE
Route::resource('empleados', 'EmpleadoController');
Route::resource('ventas', 'VentaController');
Route::resource('mesas', 'MesaController');
Route::resource('telas', 'TelaController');
Route::resource('tareas', 'TareaController');

Route::get('cargar-archivo','ArchivoController@archivoForm');
Route::post('cargar-archivo','ArchivoController@archivoPost')->name('archivo.upload');

//Manejo de Archivos
Route::post('archivo/cargar', 'ArchivoController@upload')->name('archivo.upload');
Route::get('archivo/{archivo}/descargar', 'ArchivoController@download')->name('archivo.download');
Route::post('archivo/{archivo}/borrar', 'ArchivoController@delete')->name('archivo.delete');

