@extends('layouts.auth')

@section('content')
<div class="container-fluid h-100 bg-light">
    <div class="row h-100 justify-content-center align-items-center">
    <form method="POST" action="{{ route('password.email') }}">
                        <form method="POST" action="{{ route('password.email') }}">

            @csrf
             <!-- Título del Form -->        
             <h3 class="text-center">Recuperación de Contraseña</h3> 

             @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
             
             <!-- Input de Contraseña -->
             <div class="form-group ">
                <label for="inputRepPassword">{{ __('Ingrese su correo electrónico para empezar la  recuperación de contraseña.') }}</label> <br><br>
                <input type="email" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="email" name="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <!-- Botón de Registrarse -->
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Enviar Correo') }}
                </button>
            </div>
        </form>
    </div>
</div>
