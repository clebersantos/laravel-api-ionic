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

Route::get('usuario/', 'UsuarioController@index');
Route::post('usuario/', 'UsuarioController@create');
Route::put('usuario/{id}', 'UsuarioController@update');
Route::delete('usuario/{id}', 'UsuarioController@destroy');

Route::get('perfil/', 'PerfilController@index');
Route::post('perfil/', 'PerfilController@create');
Route::put('perfil/{id}', 'PerfilController@update');
Route::delete('perfil/{id}', 'PerfilController@destroy');