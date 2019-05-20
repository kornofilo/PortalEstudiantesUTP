@extends('layouts.auth')

<!-- Específicamos el Título de la Vista -->
@section('title','Portal Estudiantil - Inicio de Sesión')

@section('content')

<div class="container">
    
    <div class="row justify-content-center h-100 align-items-center">
     
            
                            
                                <div class="card-body bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-6 rounded-lg ">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf           
                                
                                <div class="mb-4 text-center">
                                    <h3 class="font-weight-bolder">Portal Estudiantil</h3>
                                </div>
                    
                                <!-- Título del Form -->
                                <div class="text-center">
                                    <h4 class="font-weight-bolder">Inicio de Sesión</h4>
                                </div> 
                                    <!-- Input de Correo Universitario -->
                                    <div class="form-group">
                                        <label for="email">Dirección de Correo Institucional</label>
                                        <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="Correo Universitario" placeholder="{{ __('nombre.apellido@utp.ac.pa') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                    
                                    <!-- Input de Contraseña -->
                                    <div class="form-group ">
                                        <label for="password">Contraseña</label>
                                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password"  name="password" required autofocus>
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                    </div>
                    
                                    <!-- Botón de Iniciar Sesión -->
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Iniciar Sesión') }}
                                        </button>
                                    </div>
                    
                                    <!-- Link de Formulario de Recuperación de Contraseña -->
                                    <div class="form-group text-center">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('¿Olvidaste tu contraseña?') }}
                                        </a>
                                        @endif
                                    </div>
                    
                                    <!-- Link de Formulario de Registro de Usuario -->
                                    <div class="form-group mb-4 text-center">
                                        @if (Route::has('register'))
                                            ¿No tienes cuenta? <a href="{{ route('register') }}"> {{ __('Registrate') }}</a>
                                        @endif
                                    </div>
                                </form>
                            </div>
            </div>
                   
 
             
    
</div>

