<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Importamos los modelos que vamos a utilizar
use App\User;
use App\Role;

class UsersAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userData = new User();                
        return view('adminPanel.usersAdmin',compact('userData'));
    }

    //Función para obtener el usuario buscado mediante la dirección de correo.
    public function getUser(Request $request){
        //Obtenemos el la dirección de correo
        $userEmail = $request->get('userEmail');  
        //Verificamos que el email se encuentra registrado. Si no está registrado, enviamos una alerta.
        if(!$userData = User::where('email', $userEmail)->first()){
            return redirect('usersAdmin')->with('warning','Usuario no Encontrado');
        }else{
            //Si está registrado, retornamos el modelo del usuario consultado y los roles de la aplicación.
            $roles = Role::all();
            return view('adminPanel.usersAdmin',compact('userData','roles'));
        }   
    }

    //Función para cambiar el rol de un usuario.
    public function changeRole(Request $request, $email){
        //Obtenemos el nuevo rol que tendrá el usuario.
        $selectedRole = $request->get('role');  
        $newRole = Role::where('name',$selectedRole)->first();
        $user = User::where('email', $email)->first(); 
        //Actualizamos el rol del usuario.        
        $user->roles()->sync($newRole);
        return back()->with('success','Rol actualizado exitosamente.');
    }

    //Función para banear un usuario.
    public function banUser($email){
        $user = User::where('email', $email)->first(); 
        $user->estado = "Baneado";
        $user->save();
        return back()->with('success','Usuario baneado exitosamente.');
    }

    //Función para reactivar un usuario baneado.
    public function reactivateUser($email){
        $user = User::where('email', $email)->first(); 
        $user->estado = "Activo";
        $user->save();
        return back()->with('success','Usuario reactivado exitosamente.');
    }
}

