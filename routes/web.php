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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inicio', 'HomeController@index')->name('home');
Route::post('/getEstados', 'HomeController@getStates')->name('getStates');

//Clientes

Route::get('/clientes/ver', 'ClientesController@show')->name('MostrarClientes');
Route::get('/clientes/crear', 'ClientesController@create')->name('CrearCliente');
Route::post('/clientes/guardar', 'ClientesController@store')->name('GuardarCliente');
Route::delete('/cliente/{cliente}', 'ClientesController@destroy')->name('EliminarCliente');
Route::get('/cliente/{cliente}/editar', 'ClientesController@edit')->name('EditarCliente');
Route::patch('/cliente/{cliente}', 'ClientesController@update')->name('ActualizarCliente');

//Proyectos
//Esto es un comentario
Route::get('/proyectos/ver', 'ProyectosController@show')->name('MostrarProyectos');
Route::get('/proyectos/crear', 'ProyectosController@create')->name('CrearProyecto');
Route::post('/proyectos/guardar', 'ProyectosController@store')->name('GuardarProyecto');
Route::delete('/proyecto/{proyecto}', 'ProyectosController@destroy')->name('EliminarProyecto');
Route::get('/proyecto/{proyecto}/editar', 'ProyectosController@edit')->name('EditarProyecto');
Route::patch('/proyecto/{proyecto}', 'ProyectosController@update')->name('ActualizarProyecto');
