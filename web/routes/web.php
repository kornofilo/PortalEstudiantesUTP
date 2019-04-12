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
//Ruta de registro
Route::get('/register','RegistroController@getFacultades')->name('register');
Route::get('register/getcarreras/{id}','RegistroController@getCarreras');


//Ruta de Clasificados
//1.1 Ruta de Compras/Ventas
Route::resource('/anuncios','AnunciosController');
//Ruta de tutorias
Route::get('/tutorias', 'TutoriasController@index')->name('tutorias');

//Ruta de alquilerhospedaje
Route::get('/alquilerhospedaje', 'AlHosController@index')->name('alquilerhospedaje');

## Rutas del panel de administración ##
    //Ruta de Gestión de Usuarios
    Route::get('/usersAdmin', function () {
        return view('adminPanel.usersAdmin');
    })->middleware(['auth','auth.admin']); //Validamos el acceso con el middleware de autenticación y validación del rol de administrador.