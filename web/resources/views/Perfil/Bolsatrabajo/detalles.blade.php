@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 align="center">Editar Bolsa de Trabajo</h3>
        <div class="form-group">
      </div>
    </div>
    <script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <form action="{{route('Perfil.updateB',$datosB->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="container">
      <div class="row justify-content-center h-100 align-items-center">
      <div class="bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-7 rounded-lg ">
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <img style=" width: 200px;height: 200px" src="/imagenes/Bolsatrabajo/{{$datosB->imagen}}"
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
          <strong>Título de la oferta de trabajo:</strong>
          <input type="text" name="titulo" class="form-control" value="{{$datosB->titulo}}">
        </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <strong>Urgente :</strong><br>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="Si" name="urgente" value="Si"
          @if ( $datosB->urgente == "Si")
              checked
          @endif
            ><label class="form-check-label" for="Si">Si</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="No" name="urgente" value="No"
          @if($datosB->urgente == "No")
              checked
          @endif
            ><label class="form-check-label" for="No">No</label>
            </div>
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Ubicación :</strong>
          <input type="text" name="ubicacion" class="form-control" value="{{$datosB->ubicacion}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Empresa :</strong>
          <input type="text" name="empresa" class="form-control" value="{{$datosB->empresa}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Tipo de puesto :</strong>

            <select id="tipopuesto" class="form-control" name="tipopuesto" required>
                <option>Tiempo Completo</option>
                <option>Tiempo Parcial</option>
                <option>Contrato/Temporario</option>
            </select>
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Salario :</strong>
          <input type="number" name="salario"  min="0" max="9999" step="0.01" class="form-control" value="{{$datosB->salario}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Dirección :</strong>
          <input type="text" name="direccion" class="form-control" value="{{$datosB->direccion}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Descripción :</strong>
          <textarea class="form-control" name="descripcion" rows="4" cols="80">{{$datosB->descripcion}}</textarea>
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Habilidades :</strong>
          <input type="text" name="habilidades" class="form-control" value="{{$datosB->habilidades}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Fecha :</strong>
          <input type="text" name="fecha" class="form-control" value="{{$datosB->fecha}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Beneficio :</strong>
          <input type="text" name="beneficio" class="form-control" value="{{$datosB->beneficio}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Email del anunciante :</strong>
          <input type="text" name="email" class="form-control" value="{{$datosB->email}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Nombre del contacto :</strong>
          <input type="text" name="nombcont" class="form-control" value="{{$datosB->nombcont}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Celular :</strong>
          <input type="text" name="celular" class="form-control" value="{{$datosB->celular}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Email del contacto :</strong>
          <input type="text" name="emailcont" class="form-control" value="{{$datosB->emailcont}}">
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
$('#tipopuesto').val('{{$datosB->tipopuesto}}').change();
});

</script>

    @endsection
