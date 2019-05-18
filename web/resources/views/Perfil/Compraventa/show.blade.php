@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center h-100 align-items-center">
<div class="bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-7 rounded-lg ">
<div class="row">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detalles del anuncio</h3>
        <hr>
      </div>
    </div>
    @if($datos->imagen === "post-placeholder.jpg")
     <img style=" width: 300px; " src="/imagenes/clasificados/anuncios/{{$datos->imagen}}"
     class=" rounded float-right img-responsive thumb margin10 img-thumbnail">
   <!-- Si el usuario ha cambiado su imagen de perfil, la mostramos. -->
   @else
   <img style=" width: 300px; " src="/imagenes/clasificados/anuncios/{{$datos->imagen}}"
    class=" rounded float-right img-responsive thumb margin10 img-thumbnail" >
   @endif
    <div class="row">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nombre del Artículo : </strong> {{$datos->nombreArt}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Precio : </strong> B/. {{$datos->precio}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Estado del Artículo :</strong> {{$datos->estado}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Categoría :</strong> {{$datos->categoria}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Descripción :</strong> {{$datos->descripcion}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Celular :</strong> {{$datos->celular}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Nombre del Anunciante :</strong> {{$datos->nombre}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Estado de la Publicación :</strong> {{$datos->estadoPost}}
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
