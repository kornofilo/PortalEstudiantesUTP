@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 align="center">Editar el Anuncio</h3>
      </div>
    </div>
    <!--error  -->
    <form action="{{route('Perfil.update',$datos->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="container">
      <div class="row justify-content-center h-100 align-items-center">
      <div class="bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-7 rounded-lg ">
      <div class="row">
        <!-- Input de nueva imagen -->
       <div class="col-md-12 d-flex justify-content-center">
        <img class="img-responsive img-portfolio img-hover" src="{{$datos->imagen}}" width="200" height="200">
      </div>

        <div class="col-md-12">
          <div class="form-group">
            <br></br>
          <strong>Nombre del Artículo :</strong>
          <input type="text" name="nombreArt" class="form-control" value="{{$datos->nombreArt}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Precio :</strong>
          <input type="number" name="precio"  min="1" max="9999" step="0.01" class="form-control" value="{{$datos->precio}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Estado :</strong>
          <input type="text" name="estado" class="form-control" value="{{$datos->estado}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Celular :</strong>
          <input type="text" name="celular" class="form-control" value="{{$datos->celular}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Descripcion :</strong>
          <textarea class="form-control" name="descripcion" rows="4" cols="80">{{$datos->descripcion}}</textarea>
        </div>
        </div>


        <div class="col-md-12">
          <br>
          <button type="submit" class="btn btn-sm btn-warning">Actualizar</button>
          <a href="{{url('miPerfil')}}" class="btn btn-sm btn-danger">Regresar</a>
        </div>
      </div>
    </form>
  </div>
  </div>
  </div>
    @endsection
