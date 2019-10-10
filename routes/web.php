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

//Route::get('/empleados','EmpleadoController@index');
//Route::get('/empleados/create', 'EmpleadoController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//CREA LA DE TODOS LOS METODOS AUTOMATICAMENTE
Route::resource('empleados', 'EmpleadoController');
