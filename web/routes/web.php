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

//Activación del controlador de verificación de correo
Auth::routes(['verify' => true]);

//Ruta de Página principal
Route::get('/', 'HomeController@index')->name('home');

//Ruta de Eventos
Route::get('/eventos', function () {
    return view('eventos');
});

//Ruta de Bolsa de Trabajos
Route::get('/bolsadetrabajo', function () {
    return view('bolsadetrabajo');
});

//Ruta de perfil de usuario
Route::get('/miPerfil', 'PerfilController@show')->name('miPerfil');
