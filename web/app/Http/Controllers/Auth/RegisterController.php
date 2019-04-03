<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //Validación de los campos del formulario de registro de usuarios
        return Validator::make($data, [   
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],      
            'nombre' => ['required', 'string', 'max:30'],
            'apellido' => ['required', 'string', 'max:30'],
            'sede' => ['required', 'string'],
            'facultad' => ['required', 'string'],
            'carrera' => ['required', 'string'],
            'sexo' => ['required', 'string'],
            'password' => [
                'required', 
                'string', 
                'min:8', //Longitud mínima de 8
                'regex:/[a-z]/', //Debe contar con al menos 1 letra minúscula
                'regex:/[A-Z]/', // Debe contar con al menos 1 letra mayúscula
                'regex:/[0-9]/', // Debe contener con al menos 1 número
                'regex:/[@$!%*#?&]/', //Debe contener al menos 1 carácter especial
                'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'sede' => $data['sede'],
            'facultad' => $data['facultad'],
            'carrera' => $data['carrera'],
            'sexo' => $data['sexo'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
