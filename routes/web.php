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
    return view('index');
});

Route::get('/index', "RutaController@mostrar");
Route::get('/productos', "ProductosController@mostrar");
Route::get('/buzos', "ProductosController@mostrarBuzos");
Route::get('/remeras','ProductosController@mostrarRemeras');
Route::get('/misc','ProductosController@mostrarMisc');
Route::post('/productos', "ProductosController@store");

//ACCESO PANEL ADMIN
Route::get('/adminpanel', 'RutaController@adminPanel')->name('adminpanel');


//INDEXAR USUARIOS
Route::get('/users', 'RutaController@indexUsers');

//EDITAR USUARIOS
Route::get('/users/{email}/edituser', 'RutaController@edit');
Route::patch('/users/{email}', 'RutaController@update');

//BORRAR USUARIOS
Route::delete('/users/{email}', 'RutaController@destroy');

//CREAR PRODUCTOS
Route::get('/subir', 'RutaController@subir');
Route::post('/subir', 'ProductosController@store');

//INDEXAR PRODUCTOS
Route::get('/indexproductos', 'ProductosController@indexProductos');

//EDITAR PRODUCTOS
Route::get('/indexproductos/{id}/edit', 'ProductosController@edit');
Route::patch('/indexproductos/{id}', 'ProductosController@update');

//BORRAR PRODUCTOS
Route::delete('/indexproductos/{id}', 'ProductosController@destroy');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('todosProductos', "ProductosController@todos");


