@extends('layouts.layout-login')
@section('content')

<div class="container-fluid h-100 bg-light">
    <div class="row h-100 justify-content-center align-items-center">    
        <form action="" class="">          
            <!-- Título del Form -->        
            <h3 class="text-center">Portal Estudiantil</h3> 
            <!-- Input de Correo Universitario -->
            <div class="form-group">
                <div class="input-group">        
                    <input class="form-control" id="inputEmail" aria-describedby="Correo Universitario" placeholder="Correo Universitario" required autofocus>
                    <div class="input-group-prepend">
                        <div class="input-group-text">@utp.ac.pa</div>
                    </div>
                </div>
            </div>
            <!-- Input de Contraseña -->
            <div class="form-group ">
            <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña" required autofocus>
            </div>
            <!-- Botón de Iniciar Sesión -->
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
            
            <!-- Link de Formulario de Recuperación de Contraseña -->
            <div class="form-group text-center">
                <a href="/password_reset">¿Olvidaste tu contraseña?</a>
            </div>

            <!-- Link de Formulario de Registro de Usuario -->
            <div class="form-group text-center">
                ¿No tienes cuenta? <a href="/registro"> Registrate</a>
            </div>
        </form>
    </div>
</div>

