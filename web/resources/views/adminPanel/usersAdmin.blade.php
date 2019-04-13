@extends('layouts.app')

@section('title','Gestión de Usuarios')


@section('content')

<div class="alert alert-info" role="alert">
    <h6><span class="font-weight-bold">Gestión de Usuarios</span> - Ingrese la dirección de correo institucional del usuario que desea consultar y de click en el botón de buscar. </h6>
</div>

<div class="container-fluid">
        <form method="GET" action="">
            @csrf
            <div class="form-group row justify-content-center">            
                <div class="col-auto">
                    <input class="form-control" type="search" id="userEmailSearch" placeholder="nombre.apellido@utp.ac.pa" aria-label="Search">
                </div>

                <div class="col-auto">
                 <button class="btn btn-info col" type="submit"> <i class="fas fa-search"></i> </button>              
                </div>
            </div>
        </form>
    </div>


    <!--
    <div class="card">
        <div class="card-header">
            Información del Usuario
        </div>
        <div class="card-body">

        </div>
    </div>
</div>


    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Email</th>
            <th scope="col">Nombre</th>
            <th scope="col">Facultad</th>
            <th scope="col">Carrera</th>
            <th scope="col">Rol</th>
            <th scope="col">Estatus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        
            </tr>
        </tbody>
    </table>
    -->
</div>

@endsection