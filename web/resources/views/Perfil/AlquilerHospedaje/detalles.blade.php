@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 align="center">Editar Alquiler/Hospedaje</h3>
        <div class="form-group">
      </div>
    </div>
    <script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
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
         <select id="categoria" class="form-control" name="categoria" >
             <option>Apartamento</option>
             <option>Cuarto</option>
             <option>Casa</option>
         </select>
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
          <input type="text" name="ubicacion" class="form-control" value="{{$datosH->ubicacion}}">
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
          <strong>Tiene estacionamiento :</strong>
          <select id="estacionamiento" class="form-control" name="estacionamiento" >
              <option>No</option>
              <option>Si</option>
          </select>
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
          <strong>Está amueblado :</strong>
          <select id="amueblado" class="form-control" name="amueblado" >
              <option>No</option>
              <option>Si</option>
          </select>
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
  <script type="text/javascript">
  $(document).ready(function ()
  {
  $('#categoria').val('{{$datosH->categoria}}').change();
  $('#estacionamiento').val('{{$datosH->estacionamiento}}').change();
  $('#amueblado').val('{{$datosH->amueblado}}').change();
  });
  </script>
    @endsection
