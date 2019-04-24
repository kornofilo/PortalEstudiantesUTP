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
Route::get('/search','TutoriasController@search');
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

    //Rutas de Gestión de Facultades y Carreras
    Route::resource('degreesAdmin', 'AdminPanel\DegreesAdminController')->middleware(['auth','auth.admin','checkUserStatus']); 
    Route::post('degreeAdmin/newFacultad', 'AdminPanel\DegreesAdminController@newFacultad')->name('degreeAdmin.newFacultad')->middleware(['auth','auth.admin','checkUserStatus']); 
    Route::post('degreeAdmin/editFacultad/{id}', 'AdminPanel\DegreesAdminController@editFacultad')->name('degreeAdmin.editFacultad')->middleware(['auth','auth.admin','checkUserStatus']); 
    Route::post('degreeAdmin/deleteFacultad/{id}', 'AdminPanel\DegreesAdminController@deleteFacultad')->name('degreeAdmin.deleteFacultad')->middleware(['auth','auth.admin','checkUserStatus']); 
    Route::post('degreeAdmin/newCarrera/{id}', 'AdminPanel\DegreesAdminController@newCarrera')->name('degreeAdmin.newCarrera')->middleware(['auth','auth.admin','checkUserStatus']); 
    Route::post('degreeAdmin/editCarrera/{id}', 'AdminPanel\DegreesAdminController@editCarrera')->name('degreeAdmin.editCarrera')->middleware(['auth','auth.admin','checkUserStatus']); 
    Route::post('degreeAdmin/deleteCarrera/{id}', 'AdminPanel\DegreesAdminController@deleteCarrera')->name('degreeAdmin.deleteCarrera')->middleware(['auth','auth.admin','checkUserStatus']); 

    //Rutas de Moderación de Publicaciones
    Route::resource('postsMod', 'AdminPanel\PostsModController')->middleware(['auth','auth.mod','checkUserStatus']); 
    Route::post('postsMod/aprobarTutPost/{id}', 'AdminPanel\PostsModController@aprobarTutPost')->name('postsMod.aprobarTutPost')->middleware(['auth','auth.mod','checkUserStatus']); 
    Route::post('postsMod/rechazarTutPost/{id}', 'AdminPanel\PostsModController@rechazarTutPost')->name('postsMod.rechazarTutPost')->middleware(['auth','auth.mod','checkUserStatus']); 

    Route::post('postsMod/aprobarHosPost/{id}', 'AdminPanel\PostsModController@aprobarHosPost')->name('postsMod.aprobarHosPost')->middleware(['auth','auth.mod','checkUserStatus']); 
    Route::post('postsMod/rechazarHosPost/{id}', 'AdminPanel\PostsModController@rechazarHosPost')->name('postsMod.rechazarHosPost')->middleware(['auth','auth.mod','checkUserStatus']); 

    Route::post('postsMod/aprobarCyVPost/{id}', 'AdminPanel\PostsModController@aprobarCyVPost')->name('postsMod.aprobarCyVPost')->middleware(['auth','auth.mod','checkUserStatus']); 
    Route::post('postsMod/rechazarCyVPost/{id}', 'AdminPanel\PostsModController@rechazarCyVPost')->name('postsMod.rechazarCyVPost')->middleware(['auth','auth.mod','checkUserStatus']); 

    Route::get('/banned', function () {
      return view('auth.banned');
    });
  
