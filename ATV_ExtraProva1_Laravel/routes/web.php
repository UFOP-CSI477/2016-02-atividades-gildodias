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
    $eventos = \App\Evento::orderBy('data', 'asc')->get();
    return view('welcome')->with('eventos', $eventos);
});


Route::resource('eventos','EventoController');
Route::resource('registros','RegistroController');

Route::get('atletas','AtletaController@index')->name('atletas.index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('total','TotalController');