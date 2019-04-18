@extends('layouts.auth')

<!-- Específicamos el Título de la Vista -->
@section('title','Inicio de Sesión')

@section('content')
<div class="container">
    <div class="row justify-content-center h-100 align-items-center">
        <div class="bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-6 rounded-lg text-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf           
            <div class="mt-4 mb-4">
            <!-- Título del Form -->
                <h3 class="font-weight-bolder">Portal Estudiantil</h3>
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
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Iniciar Sesión') }}
                    </button>
                </div>

                <!-- Link de Formulario de Recuperación de Contraseña -->
                <div class="form-group">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                    @endif
                </div>

                <!-- Link de Formulario de Registro de Usuario -->
                <div class="form-group mb-4">
                    @if (Route::has('register'))
                        ¿No tienes cuenta? <a href="{{ route('register') }}"> {{ __('Regístrate') }}</a>
                    @endif
                </div>
            </form>
        </div>        
    </div>
</div>

