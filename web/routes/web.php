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
Route::resource('/', 'HomeController')->middleware(['checkUserStatus']);

//Ruta de perfil de usuario
Route::resource('miPerfil', 'PerfilController');
//Rutas para el crud de anuncios
Route::get('Perfil/Compraventa/show/{id}', 'AnunciosController@show')->name('Perfil.show');
Route::get('Perfil/Compraventa/detalles/{id}', 'AnunciosController@edit')->name('Perfil.detalles')->middleware(['auth']);
Route::post ('Perfil/update/{id}', 'AnunciosController@update')->name('Perfil.update')->middleware(['auth']);
Route::get('dts/{id}', 'AnunciosController@destroy')->name('dts');
//Rutas para el crud de tutorias
Route::get('Perfil/show2/{id}', 'TutoriasController@show')->name('Perfil.show2');
Route::get('Perfil/detalles2/{id}', 'TutoriasController@edit')->name('Perfil.detalles2')->middleware(['auth']);
Route::put ('Perfil/update2/{id}', 'TutoriasController@update')->name('Perfil.update2')->middleware(['auth']);
Route::get('dt/{id}', 'TutoriasController@destroy')->name('dt');
//Rutas para el crud de Bolsa de trabajo
Route::get('Perfil/showB/{id}', 'BolsatrabajoController@show')->name('Perfil.showB');
Route::get('Perfil/detallesB/{id}', 'BolsatrabajoController@edit')->name('Perfil.detallesB')->middleware(['auth']);
Route::put ('Perfil/updateB/{id}', 'BolsatrabajoController@update')->name('Perfil.updateB')->middleware(['auth']);
Route::get('dB/{id}', 'BolsatrabajoController@destroy')->name('dtB');
//Rutas para el crud de Eventos
Route::get('Perfil/showE/{id}', 'EventoController@show')->name('Perfil.showE');
Route::get('Perfil/detallesE/{id}', 'EventoController@edit')->name('Perfil.detallesE')->middleware(['auth']);
Route::put ('Perfil/updateE/{id}', 'EventoController@update')->name('Perfil.updateE')->middleware(['auth']);
Route::get('dE/{id}', 'EventoController@destroy')->name('dtE');
//Rutas para el crud de Alquiler y Hospedaje
Route::get('Perfil/showH/{id}', 'HospedajeController@show')->name('Perfil.showH');
Route::get('Perfil/detallesH/{id}', 'HospedajeController@edit')->name('Perfil.detallesH')->middleware(['auth']);
Route::put ('Perfil/updateH/{id}', 'HospedajeController@update')->name('Perfil.updateH')->middleware(['auth']);
Route::get('dtH/{id}', 'HospedajeController@destroy')->name('dtH');


//ruta para cargar carreras al formulario de editar el perfil
Route::get('miPerfil/getcarreras/{id}','PerfilController@getCarreras');
//Ruta de Actualización de Perfil
Route::post('miPerfil/updateProfile', 'PerfilController@updateProfile')->name('perfil.update')->middleware(['auth']);
//Ruta para mostrar otro perfil
Route::get('OtroPerfil','PerfilController@postperfiles');
//Ruta de registro
Route::get('/register','RegistroController@getFacultades')->name('register');
Route::get('register/getcarreras/{id}','RegistroController@getCarreras');



//Ruta de Clasificados
Route::group(['prefix' => 'clasificado'], function () {
  //1.1 Ruta de Compras/Ventas
Route::resource('anuncios','AnunciosController');
Route::get('/anuncios','AnunciosController@search')->name('anuncios.search');
//Ruta de tutorias
Route::resource('tutorias', 'TutoriasController');
Route::get('/tutorias','TutoriasController@search')->name('tutorias.search');
//Ruta de alquilerhospedaje
Route::resource('alquilerhospedajes', 'HospedajeController');
Route::get('/alquilerhospedajes','HospedajeController@search')->name('alquilerhospedajes.search');
});
//Ruta de bolsatrabajo
Route::resource('bolsatrabajos', 'BolsatrabajoController');
Route::get('/bolsatrabajos','BolsatrabajoController@searchB');
//Ruta de Eventos
Route::resource('eventos','EventoController');
Route::get('/eventos','EventoController@searchE');
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
