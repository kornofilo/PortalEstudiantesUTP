@extends('layouts.auth')

@section('content')
<div class="container-fluid h-100 bg-light">
    <div class="row h-100 justify-content-center align-items-center">    
        <form method="POST" action="{{ route('register') }}">
            @csrf
             <!-- Título del Form -->        
             <h3 class="text-center">Registro</h3> 

             <div class="form-group">
                <label for="sede" class="col-form-label text-md-right">{{ __('Sede') }}</label>
                <select id="sede" class="form-control" name="sede" required>
                    <option value="Azuero">Azuero</option>
                    <option>Bocas del Toro</option>
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
                <select id="facultad" class="form-control" name="facultad" required>
                    <option >Civil</option>
                    <option >Eléctrica</option>
                    <option >Industrial</option>
                    <option > Mecánica</option>
                    <option >Sistemas Computacionales</option>
                    <option >Ciencias y Tecnología</option>
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
                    <!-- Facultad de Ingeniería Civil -->
                    <option>Licenciatura en Ingeniería Ambiental</option>
                    <option>Licenciatura en Ingeniería Civil</option>
                    <option>Licenciatura en Ingeniería Geomática</option>
                    <option>Licenciatura en Ingeniería Marítima Portuaria</option>
                    <option>Licenciatura en Ingeniería Geológica</option>
                    <option>Licenciatura en Operaciones Marítimas y Portuarias</option>
                    <option>Licenciatura en Dibujo Automatizado</option>
                    <option>Licenciatura en Edificaciones</option>
                    <option>Licenciatura en Saneamiento y Ambiente</option>
                    <option>Licenciatura en Topografía</option>
                    <!-- Facultad de Ingeniería Eléctrica-->
                    <option>Licenciatura en Ingeniería Eléctrica y Electrónica</option>
                    <option>Licenciatura en Ingeniería Eléctrica</option>
                    <option>Licenciatura en Ingeniería Electrónica</option>
                    <option>Licenciatura en Ingeniería Electromecánica</option>
                    <option>Licenciatura en Ingeniería en Telecomunicaciones</option>
                    <option>Licenciatura en Ingeniería Electrónica y Telecomunicaciones</option>
                    <option>Licenciatura en Ingeniería de Control y Automatización</option>
                    <option>Licenciatura en Electrónica y Sistemas de Comunicación</option>
                    <option>Licenciatura en Sistemas Eléctricos y Automatización</option>
                    <option>Técnico en Ingeniería con especialización en Autotrónica</option>
                    <option>Técnico en Ingeniería con especialización en Electrónica Biomédica</option>
                    <option>Técnico en Ingeniería con especialización en Sistemas Eléctricos</option>
                    <option>Técnico en Ingeniería con especialización en Telecomunicaciones</option>
                    <!--Facultad de Ingeniería Industrial -->
                    <option>Licenciatura en Ingeniería Industrial</option>
                    <option>Licenciatura en Ingeniería Mecánica Industrial</option>
                    <option>Licenciatura en Ingeniería Logística y Cadena de Suministro</option>
                    <option>Licenciatura en Recursos Humanos y Gestión de la Productividad</option>
                    <option>Licenciatura en Mercadeo y Comercio Internacional</option>
                    <option>Licenciatura en Mercadeo y Negocios Internacionales</option>
                    <option>Licenciatura en Gestión Administrativa</option>
                    <option>Licenciatura en Gestión de la Producción Industrial</option>
                    <option>Licenciatura en Logística y Transporte Multimodal</option>
                    <!-- Facultad de Ingeniería Mecánica -->
                    <option>Licenciatura en Ingeniería Mecánica</option>
                    <option>Licenciatura en Ingeniería de Mantenimiento</option>
                    <option>Licenciatura en Ingeniería de Energía y Ambiente</option>
                    <option>Licenciatura en Ingeniería Naval</option>
                    <option>Licenciatura en Ingeniería Aeronáutica</option>
                    <option>Licenciatura en Administración de Aviación</option>
                    <option>Licenciatura en Administración de Aviación con opción a vuelo</option>
                    <option>Licenciatura en Mecánica Automotriz</option>
                    <option>Licenciatura en Mecánica Industrial</option>
                    <option>Licenciatura en Refrigeración y Aire Acondicionado</option>
                    <option>Licenciatura en Soldadura</option>
                    <option>Técnico en Despacho de Vuelo</option>
                    <option>Técnico en Ingeniería de Mantenimiento de Aeronaves con especialización en Motores y Fuselajes</option>
                    <!-- Facultad de Ingeniería de Sistemas Computacionales --->
                    <option>Licenciatura en Ingeniería de Sistemas de Información</option>
                    <option>Licenciatura en Ingeniería de Sistemas y Computación</option>
                    <option>Licenciatura en Ingenieria de Software</option>
                    <option>Licenciatura en Desarrollo de Software</option>
                    <option>Licenciatura en Redes Informáticas</option>
                    <option>Licenciatura en Informática Aplicada a la Educación</option>
                    <option>Técnico en Informática para la Gestión Empresarial</option>
                    <!-- Facultad de Ciencias y Tecnología -->
                    <option>Licenciatura en Ingeniería en Alimentos</option>
                    <option>Licenciatura en Ingeniería Forestal</option>
                    <option>Licenciatura en Comunicación Ejecutiva Bilingüe</option>
                </select>
            </div>

            <!-- Input de Nombre -->
            <div class="form-group">
                <label for="nombre">{{ __('Nombre') }}</label>
                <input class="form-control" id="nombre" name="nombre" required focus>
            </div>

              <!-- Input de Apellido -->
              <div class="form-group">
                <label for="apellido">{{ __('Apellido') }}</label>
                <input class="form-control" id="apellido" name="apellido" required focus>
            </div>
            
            <label>{{ __('Sexo') }}</label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="MasculinoRadio" value="Masculino">
                <label class="form-check-label" for="MasculinoRadio">Masculino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="FemeninoRadio" value="Femenino">
                <label class="form-check-label" for="FemeninoRadio">Femenino</label>
            </div> <br> <br>

            <!-- Input de Correo Universitario -->
            <div class="form-group">
                <label for="email">{{ __('Correo Universitario') }}</label>
                <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="Correo Universitario" required autofocus>   
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
                    ¿Ya tienes cuenta? <a href="{{ route('login') }}"> {{ __('Inicia Sesión') }}</a>
                @endif
            </div>                                                                                                   
        </form>
    </div>
</div>
