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
    <img style=" width: 300px; " src="/imagenes/clasificados/hospedador/{{$datosB->imagen}}"
     class=" rounded float-right img-responsive thumb margin10 img-thumbnail" >
    <div class="row">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
        <strong>Título del alquiler/hospedaje:</strong> {{$datosB->titulo}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Ubicación :</strong> {{$datosB->ubicacion}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Precio :</strong> {{$datosB->precio}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Estacionamiento :</strong> {{$datosB->estacionamiento}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Habitaciones :</strong> {{$datosB->habitaciones}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Baños :</strong> {{$datosB->baños}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Descripción :</strong> {{$datosB->descripcion}}</textarea>
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Nombre del contacto :</strong> {{$datosB->nombre}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Celular :</strong> {{$datosB->celular}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Email del contacto :</strong> {{$datosB->email}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Publicada el :</strong> {{$datosB->created_at->format('d/m/Y')}}
      </div>
      </div>

      <div class="col-md-12">
        <a href="{{url('miPerfil')}}" class="btn btn-sm btn-success">Regresar</a>
      </div>
    </div>
  </div>

@endsection
