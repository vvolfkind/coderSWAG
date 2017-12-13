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

//ADMIN
Route::get('/adminpanel', 'RutaController@adminPanel')->name('adminpanel');
Route::get('/subir', 'RutaController@subir');
Route::post('/subir', 'ProductosController@store');
Route::get('/users', 'RutaController@indexUsers');
Route::get('/indexproductos', 'ProductosController@indexProductos');
Route::get('/indexproductos/{id}/edit', 'ProductosController@edit');
Route::patch('/indexproductos/{id}', 'ProductosController@update');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('todosProductos', "ProductosController@todos");


