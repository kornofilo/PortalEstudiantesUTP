@extends('layouts.auth')

@section('title','Recuperación de Contraseña')


@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

<div class="container">
    <div class="row justify-content-center h-100 align-items-center">
        <div class="bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-6 rounded-lg ">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                
                <div class="mb-4 text-center">
                    <h3 class="font-weight-bolder">Portal Estudiantil</h3>
                </div>
                
                <!-- Título del Form -->
                <div class="text-center">
                    <h4 class="font-weight-bolder">Recuperación de Contraseña</h4>
                </div>
                               
                <!-- Input de Email -->
                <div class="form-group ">
                    <label for="inputRepPassword">{{ __('Ingrese su correo electrónico para empezar la  recuperación de contraseña.') }}</label> <br><br>
                    <input type="email" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="email" name="email" required autofocus>
                    <!-- Validación de email -->
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
</div>
