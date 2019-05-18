@extends('layouts.auth')

@section('title','Portal Estudiantil - Crear Nueva Cuenta')

@section('content')
<script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
<div class="container">
    <div class="row justify-content-center h-90 align-items-center">
        <div class="bg-light mx-2 my-4 col-sm8 col-md8 col-lg6 col-xl-6 rounded-lg">
            <form method="POST" action="{{ route('register') }} " enctype="multipart/form-data">
                @csrf
                <div class="mb-4 text-center">
                    <h3 class="font-weight-bolder">Portal Estudiantil</h3>
                </div>

                <!-- Título del Form -->
                <div class="text-center">
                    <h4 class="font-weight-bolder">Crear Nueva Cuenta</h4>
                </div>

                <!-- Select de Sede o Centro Regional -->
                <div class="form-group">
                    <label for="sede" class="col-form-label text-md-right">{{ __('Sede o Centro Regional') }}</label>
                    <select id="sede" class="form-control" name="sede" required >
                        <option  disabled selected>--- Sede o Centro Regional ---</option>
                        <option>Azuero</option>
                        <option>Bocas del Toro</option>
                        <option>Campus Metropolitano</option>
                        <option>Chiriquí</option>
                        <option>Coclé</option>
                        <option>Colón</option>
                        <option>Panamá Oeste</option>
                        <option>Veraguas</option>
                    </select>

                    @if ($errors->has('sede'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('sede') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="facultad" class="col-form-label text-md-right">{{ __('Facultad') }}</label>
                    <select id="facultad" class="form-control" name="facultad" value="{{old('facultad')}}" required>
                        <option disabled selected>--- Facultad ---</option>
                        @foreach ($facultades as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>

                        @if ($errors->has('facultad'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('facultad') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group">
                    <label for="carrera" class="col-form-label text-md-right">{{ __('Carrera') }}</label>
                    <select id="carrera" class="form-control" name="carrera" required>
                        <option disabled selected>--Carrera--</option>
                    </select>
                </div>

                <!-- Input de Nombre -->
                <div class="form-group">
                    <label for="nombre">{{ __('Nombre') }}</label>
                    <input class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}"required focus>
                </div>

                <!-- Input de Apellido -->
                <div class="form-group">
                    <label for="apellido">{{ __('Apellido') }}</label>
                    <input class="form-control" id="apellido" name="apellido" value="{{old('apellido')}}" required focus>
                </div>

                <label>{{ __('Sexo') }}</label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="MasculinoRadio" value="Masculino" required>
                    <label class="form-check-label" for="MasculinoRadio">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="FemeninoRadio" value="Femenino" required>
                    <label class="form-check-label" for="FemeninoRadio">Femenino</label>
                </div> <br><br>

                <!-- Input de Correo Universitario -->
                <div class="form-group">
                    <label for="email">{{ __('Correo Institucional')}}</label>
                    <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{old('email')}}" name="email" aria-describedby="Correo Universitario" placeholder="nombre.apellido@utp.ac.pa" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Input de Contraseña -->
                <div class="form-group">
                    <label for="password">{{ __('Contraseña') }}</label>
                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" required autofocus>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                </div>

                <!-- Input de Contraseña -->
                <div class="form-group ">
                    <label for="password-confirm">{{ __('Repetir Contraseña') }}</label>
                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password-confirm" name="password_confirmation" required autofocus>
                </div>

                <!-- Botón de Registrarse -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Registrarse') }}
                    </button>

                </div>

                <!-- Link de Formulario de Inicio de Sesión -->
                <div class="form-group text-center">
                    @if (Route::has('login'))
                        ¿Ya tienes cuenta? <a href="{{ route('login') }}"> {{ __('Iniciar Sesión') }}</a>
                    @endif
                </div>

            </form>
        </div>
    </div>
</div>



  <script type="text/javascript">
    $(document).ready(function ()
    {
          $('select[name="facultad"]').on('change',function(){
               var facultadID = jQuery(this).val();
               if(facultadID)
               {
                  $.ajax({
                     url : 'register/getcarreras/' +facultadID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                      $('select[name="carrera"]').empty();
                        $.each(data, function(key,value){

                           $('select[name="carrera"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }else{
                  $('select[name="carrera"]').empty();
               }
            });
    });
    </script>
