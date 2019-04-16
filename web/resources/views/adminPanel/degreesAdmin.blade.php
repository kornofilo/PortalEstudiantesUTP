@extends('layouts.app')

@section('title','Gestión de Facultades y Carreras')

@section('content')
<!-- Información -->
<div class="alert alert-info" role="alert">
    <h6 class="text-center"><span class="font-weight-bold">Panel de Administración </span> - Gestión de Facultades y Carreras </h6>
</div>

@foreach($facultades as $facultad)
<div class="container-fluid">
    <div class="card shadow p-3 mb-5 bg-white rounded">
    <div class="card-header">
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight font-weight-bold">
                <h4>{{"Facultad de " . $facultad->nombre}}</h4>
            </div>
            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-primary">
                    <i class="far fa-edit"></i>
                    Editar Facultad
                </button>
            </div>
            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-success">
                    <i class="fas fa-plus"></i>
                    Agregar Carrera
                </button>
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