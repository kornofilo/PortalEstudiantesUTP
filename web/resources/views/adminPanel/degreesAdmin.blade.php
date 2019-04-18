@extends('layouts.app')

@section('title','Gestión de Facultades y Carreras')

@section('content')
<!-- Información -->
<div class="alert alert-info" role="alert">
    <h6 class="text-center"><span class="font-weight-bold">Panel de Administración </span> - Gestión de Facultades y Carreras </h6>
</div>

<!-- Opción de creación de nueva facultad -->
<div>
    <button type="button" class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseNewFacultad" aria-expanded="false" aria-controls="collapseNewFacultad">
        <i class="fas fa-plus"></i>
        Crear Facultad
    </button>

    <!-- Collapse que contiene el formulario para creación de una nueva facultad -->
    <div class="collapse" id="collapseNewFacultad">
        <div class="card card-body">
            <!-- Formulario para la creación de nueva Facultad -->
            <form action="{{route('degreeAdmin.newFacultad')}}" method="post">
                @csrf
                <div class="form-group row">            
                    <div class="col-5">
                        <input class="form-control" type="text" name="newFacultad" placeholder="Nombre de la Nueva Facultad" required>
                    </div>

                    <div class="col-3">
                        <button type="submit" class="btn btn-success" type="button">
                            <i class="far fa-save"></i>
                        </button>
                        <button type="reset" class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseNewFacultad" aria-expanded="false" aria-controls="collapseNewFacultad">
                            <i class="fas fa-times"></i>          
                        </button>         
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> <br>

<!-- Mostramos las facultades registradas en la base de datos -->
@foreach($facultades as $facultad)
<div class="container-fluid">
    <div class="card shadow p-3 mb-5 bg-white rounded">
    <div class="card-header">
        <div class="d-flex bd-highlight">
            <!-- Nombre de la facultad -->
            <div class="p-2 flex-grow-1 bd-highlight font-weight-bold">
                <h4>{{$facultad->nombre}}</h4>
            </div>       
            <!-- Opción para crear nueva carrera en la facultad -->                
            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseNuevaCarrea-F{{$facultad->id}}" aria-expanded="false" aria-controls="collapseNuevaCarrea-F{{$facultad->id}}">
                    <i class="fas fa-plus"></i>
                    Agregar Carrera
                </button>
            </div>
            <!-- Opción para crear editar la facultad -->                
            <div class="p-2 bd-highlight">
            <button type="button" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseEditar-F{{$facultad->id}}" aria-expanded="false" aria-controls="collapseEditar-F{{$facultad->id}}">
                    <i class="far fa-edit"></i>
                    Editar Nombre
                </button>
            </div>
            <!-- Opción para crear eliminar la facultad -->                
            <div class="p-2 bd-highlight">
                <form action="{{route('degreeAdmin.deleteFacultad', $facultad->id)}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="far fa-edit"></i>
                        Eliminar Facultad
                    </button>
                </form>
            </div>
        </div>

        <!-- Collapse que contiene el formulario para creación de una nueva facultad -->
        <div class="collapse" id="collapseNuevaCarrea-F{{$facultad->id}}">
             
        </div>

        <!-- Collapse que contiene el formulario para editar el nombre de la facultad -->
        <div class="collapse" id="collapseEditar-F{{$facultad->id}}">
            <div class="card card-body">
                <!-- Formulario para la creación de nueva Facultad -->
                <form action="{{route('degreeAdmin.editFacultad', $facultad->id)}}" method="post">
                    @csrf
                    <div class="form-group row">            
                        <div class="col-5">
                            <input class="form-control" type="text" name="newNameFacultad" value="{{$facultad->nombre}}" required>
                        </div>

                        <div class="col-3">
                            <button type="submit" class="btn btn-success" type="button">
                                <i class="far fa-save"></i>
                            </button>
                            <button type="reset" class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseEditar-F{{$facultad->id}}" aria-expanded="false" aria-controls="collapseEditar-F{{$facultad->id}}">
                                <i class="fas fa-times"></i>          
                            </button>         
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="card-body font-weight-bold">
        <h5 class="card-title">Carreras:</h5>
        @foreach($carreras as $carrera)
            <ul class="list-group">
                @if($facultad->id == $carrera->facultad_id)
                    <li class="list-group-item">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 flex-grow-1 bd-highlight">
                                {{$carrera->nombre}} 
                            </div>
                            <div class="p-2 bd-highlight">
                                <button type="button" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                            <div class="p-2 bd-highlight">
                                <button type="button" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>                                              
                    </li>   
                @endif                 
            </ul>
        @endforeach        
    </div>
    </div> <br>
</div>
@endforeach
@endsection