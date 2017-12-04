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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/index', "RutaController@mostrar");

Route::get('/productos', "ProductosController@mostrar");

Route::get('/buzos', "ProductosController@show");

Route::get('/remeras','ProductosController@muestra');

Route::get('/subir', 'RutaController@subir');

//Route::get("/index", "HomeController@index");//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
