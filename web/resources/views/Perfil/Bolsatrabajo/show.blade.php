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
    @if($datos->imagen === "post-placeholder.jpg")
     <img style=" width: 300px; " src="/{{$datosB->imagen}}"
     class=" rounded float-right img-responsive thumb margin10 img-thumbnail">
   <!-- Si el usuario ha cambiado su imagen de perfil, la mostramos. -->
   @else
   <img style=" width: 300px; " src="/imagenes/bolsatrabajo/{{$datosB->imagen}}"
    class=" rounded float-right img-responsive thumb margin10 img-thumbnail" >
   @endif

    <div class="row">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Título de la oferta de trabajo:</strong> {{$datosB->titulo}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Urgente :</strong> {{$datosB->urgente}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Ubicación :</strong> {{$datosB->ubicacion}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Empresa :</strong> {{$datosB->empresa}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Tipo de puesto :</strong> {{$datosB->tipopuesto}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Salario :</strong> {{$datosB->salario}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Dirección :</strong> {{$datosB->direccion}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Descripción :</strong> {{$datosB->descripcion}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Habilidades :</strong> {{$datosB->habilidades}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Fecha :</strong> {{$datosB->fecha}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Beneficio :</strong> {{$datosB->beneficio}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Email del anunciante :</strong> {{$datosB->email}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Nombre del contacto :</strong> {{$datosB->nombcont}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Celular :</strong> {{$datosB->celular}}
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Email del contacto :</strong> {{$datosB->emailcont}}
        </div>
        </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Estado de la Publicación :</strong> {{$datosB->estadoPost}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Publicada el :</strong> {{$datosB->created_at}}
      </div>
      </div>

      <div class="col-md-12">
        <a href="{{url('miPerfil')}}" class="btn btn-sm btn-success">Regresar</a>
      </div>
    </div>
  </div>

@endsection
