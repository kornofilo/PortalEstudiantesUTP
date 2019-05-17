
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 align="center">Editar el Anuncio</h3>
      </div>
    </div>
     <script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <form action="{{route('Perfil.update',$datos->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('POST')
      <div class="container">
      <div class="row justify-content-center h-100 align-items-center">
      <div class="bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-7 rounded-lg ">
      <div class="row">
        <!-- Input de nueva imagen -->
       <div class="col-md-12 d-flex justify-content-center">
         <img style=" width: 200px;height: 200px" src="/imagenes/clasificado/anuncio/{{$datos->imagen}}"
          class=" rounded float-right img-responsive thumb margin10 img-thumbnail" >
      </div>
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
            <option>Compra</option>
            <option>Venta</option>
        </select>
      </div>
      </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Nombre del Artículo :</strong>
          <input type="text" name="nombreArt" class="form-control" value="{{$datos->nombreArt}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Precio :</strong>
          <input type="number" name="precio"  min="0" max="9999" step="0.01" class="form-control" value="{{$datos->precio}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Estado del Artículo :</strong>
          <select id="estado" class="form-control" name="estado" >
              <option>Nuevo</option>
              <option>Usado</option>
          </select>
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
          <br></br>
        </div>
      </div>
    </form>
  </div>
  </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function ()
  {
  $('#estado').val('{{$datos->estado}}').change();
  $('#categoria').val('{{$datos->categoria}}').change();
  });

  </script>
    @endsection
