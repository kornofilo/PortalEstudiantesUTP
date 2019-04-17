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
Route::get('/', 'HomeController@index')->name('home')->middleware(['checkUserStatus']);

//Ruta de perfil de usuario
Route::get('/miPerfil', 'PerfilController@show')->name('miPerfil');
//Ruta de registro
Route::get('/register','RegistroController@getFacultades')->name('register');
Route::get('register/getcarreras/{id}','RegistroController@getCarreras');


//Ruta de Clasificados
Route::group(['prefix' => 'clasificado'], function () {
  //1.1 Ruta de Compras/Ventas
Route::resource('anuncios','AnunciosController');
//Ruta de tutorias
Route::resource('tutorias', 'TutoriasController');
//Ruta de alquilerhospedaje
Route::resource('alquilerhospedajes', 'HospedajeController');
});
//Ruta de bolsatrabajo
Route::resource('bolsatrabajos', 'BolsatrabajoController');

//Ruta de Eventos
Route::resource('eventos','EventoController');
//Route::resource('eventos','EventoController@carga')->name('eventos');


## Rutas del panel de administración ##
    //Rutas de Gestión de Usuarios
    Route::get('usersAdmin/getUser/', 'AdminPanel\UsersAdminController@getUser')->name('usersAdmin.getUser')->middleware(['auth','auth.admin','checkUserStatus']); 
    Route::post('usersAdmin/changeRole/{email}', 'AdminPanel\UsersAdminController@changeRole')->name('usersAdmin.changeRole')->middleware(['auth','auth.admin','checkUserStatus']); 
    Route::post('usersAdmin/banUser/{email}', 'AdminPanel\UsersAdminController@banUser')->name('usersAdmin.banUser')->middleware(['auth','auth.admin','checkUserStatus']); 
    Route::post('usersAdmin/reactivateUser/{email}', 'AdminPanel\UsersAdminController@reactivateUser')->name('usersAdmin.reactivateUser')->middleware(['auth','auth.admin','checkUserStatus']); 
    Route::resource('usersAdmin', 'AdminPanel\UsersAdminController')->middleware(['auth','auth.admin','checkUserStatus']); 

    //Rutas de Gestión de Facultades
    Route::resource('degreesAdmin', 'AdminPanel\DegreesAdminController')->middleware(['auth','auth.admin','checkUserStatus']); 


    Route::get('/banned', function () {
      return view('auth.banned');
    });
  
