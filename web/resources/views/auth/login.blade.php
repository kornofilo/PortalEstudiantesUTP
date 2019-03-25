@extends('layouts.auth')
@section('content')

<div class="container-fluid h-100 bg-light">
    <div class="row h-100 justify-content-center align-items-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf
             <!-- Título del Form -->
             <h3 class="text-center">Portal Estudiantil</h3>
            <!-- Input de Correo Universitario -->
            <div class="form-group">
                <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="Correo Universitario" placeholder="{{ __('Correo Universitario') }}" required autofocus>                    
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>    

            <!-- Input de Contraseña -->
            <div class="form-group ">
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password"  name="password" placeholder="{{ __('Contraseña') }}" required autofocus>
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
            <div class="form-group text-center">
                @if (Route::has('register'))
                    ¿No tienes cuenta? <a href="{{ route('register') }}"> {{ __('Registrate') }}</a>
                @endif
            </div>
        </form>
    </div>
</div>
