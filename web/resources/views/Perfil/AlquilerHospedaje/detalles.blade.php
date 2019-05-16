@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 align="center">Editar Alquiler/Hospedaje</h3>
        <div class="form-group">
      </div>
    </div>
    <!--error  -->
    <form action="{{route('Perfil.updateH',$datosH->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="container">
      <div class="row justify-content-center h-100 align-items-center">
      <div class="bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-7 rounded-lg ">
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <img style=" width: 200px;height: 200px" src="/imagenes/clasificado/hospedador/{{$datosH->imagen}}"
           class=" rounded float-right img-responsive thumb margin10 img-thumbnail" >
       </div>
       <br>
       <div class="col-md-12">
       <div class="form-group">
         <label for="imagen">Nueva Imagen</label>
         <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
       </div>
       </div>
       <div class="col-md-12">
         <div class="form-group">
         <strong>Categoría :</strong>
         <input type="text" name="categoria" class="form-control" value="{{$datosH->categoria}}">
       </div>
       </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Título del alquiler/hospedaje:</strong>
          <input type="text" name="titulo" class="form-control" value="{{$datosH->titulo}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Ubicación :</strong>
          <input type="text" name="materia" class="form-control" value="{{$datosH->ubicacion}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Descripción :</strong>
          <textarea class="form-control" name="descripcion" rows="4" cols="80">{{$datosH->descripcion}}</textarea>
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Precio :</strong>
          <input type="text" name="precio" class="form-control" value="{{$datosH->precio}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Estacionamiento :</strong>
          <input type="text" name="estacionamiento" class="form-control" value="{{$datosH->estacionamiento}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Habitaciones :</strong>
          <input type="text" name="habitaciones"  class="form-control" value="{{$datosH->habitaciones}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Baños :</strong>
          <input type="number" name="baños" class="form-control" value="{{$datosH->baños}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Amueblado :</strong>
          <input type="text" name="amueblado" class="form-control" value="{{$datosH->amueblado}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Nombre del contacto :</strong>
          <input type="text" name="nombre" class="form-control" value="{{$datosH->nombre}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Celular :</strong>
          <input type="text" name="celular" class="form-control" value="{{$datosH->celular}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Email del contacto :</strong>
          <input type="text" name="email" class="form-control" value="{{$datosH->email}}">
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
