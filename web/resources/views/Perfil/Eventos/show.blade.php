@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center h-100 align-items-center">
<div class="bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-7 rounded-lg ">
<div class="row">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detalles del Evento</h3>
        <hr>
      </div>
    </div>
    <img style=" width: 300px; " src="/imagenes/eventos/{{$datos->imagen}}"
     class=" rounded float-right img-responsive thumb margin10 img-thumbnail" >
    <div class="row">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nombre del Evento : </strong> {{$datos->titulo}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Costo : </strong> B/. {{$datos->costo}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Nombre de la facultad :</strong> {{$datos->facultad_nomb}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Descripción :</strong> {{$datos->descripcion}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Publicada el :</strong> {{$datos->created_at->format('d/m/Y')}}
      </div>
      </div>

      <div class="col-md-12">
        <a href="{{url('miPerfil')}}" class="btn btn-sm btn-success">Regresar</a>
      </div>
    </div>
  </div>

@endsection
