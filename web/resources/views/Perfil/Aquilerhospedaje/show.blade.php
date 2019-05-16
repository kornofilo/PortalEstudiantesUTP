@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center h-100 align-items-center">
<div class="bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-7 rounded-lg ">
<div class="row">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detalles de la Bolsa de Trabajo</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
        <strong>Título del alquiler/hospedaje:</strong>
        <input type="text" name="titulo" class="form-control" value="{{$datosT->titulo}}">
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Ubicación :</strong>
        <input type="text" name="materia" class="form-control" value="{{$datosT->ubicacion}}">
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Precio :</strong>
        <input type="text" name="materia" class="form-control" value="{{$datosT->precio}}">
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Estacionamiento :</strong>
        <input type="text" name="materia" class="form-control" value="{{$datosT->estacionamiento}}">
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Habitaciones :</strong>
        <input type="number" name="costo"  min="1" max="9999" step="0.01" class="form-control" value="{{$datosT->habitaciones}}">
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Baños :</strong>
        <input type="number" name="costo"  min="1" max="9999" step="0.01" class="form-control" value="{{$datosT->baños}}">
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Descripción :</strong>
        <textarea class="form-control" name="descripcion" rows="4" cols="80">{{$datosT->descripcion}}</textarea>
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Habilidades :</strong>
        <input type="text" name="materia" class="form-control" value="{{$datosT->habilidades}}">
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Fecha :</strong>
        <input type="text" name="ubicacion" class="form-control" value="{{$datosT->fecha}}">
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Nombre del contacto :</strong>
        <input type="text" name="celular" class="form-control" value="{{$datosT->nombre}}">
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Celular :</strong>
        <input type="text" name="celular" class="form-control" value="{{$datosT->celular}}">
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Email del contacto :</strong>
        <input type="text" name="celular" class="form-control" value="{{$datosT->email}}">
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Estado de la Publicación :</strong> {{$datos->estadoPost}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Publicada el :</strong> {{$datos->created_at}}
      </div>
      </div>

      <div class="col-md-12">
        <a href="{{url('miPerfil')}}" class="btn btn-sm btn-success">Regresar</a>
      </div>
    </div>
  </div>

@endsection
