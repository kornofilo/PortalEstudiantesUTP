@extends('layouts.app')

@section('content')

<!-- vista de index-->
<div class="container">

<!-- Button crear -->
<div class="form-group  text-left">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  >
  Crear Tutorias
</button>
</div>
@if ($tutorias->isEmpty())
<div class="page-header">
  <h1>No se Encontraron Datos</h1>
</div>
@else

@foreach($tutorias as $tutoria)

<div class="card col-md-3 ml-md-auto" style="max-width: 540px;">
  <div class="row no-gutters ">

    <div class="col-md-4 ">
      <img src=".." alt=".."class="card-img">
    </div>
  <a class="card-block stretched-link text-decoration-none" data-toggle="modal" data-target="#descripcion" role="button">
    <div class="col-md-8 ">

      <div class=" card-body" >
        <h5 class="card-title">{{$tutoria->titulo}}</h5>
          <div class="form-group row">
            <div class="col-sm-8">
          <p class="card-text">Materia: {{$tutoria->materia}} </p>
          <p class="card-text">Ubicación: {{$tutoria->ubicacion}}</p>
          <p class="card-text"><small class="text-muted">Celular: {{$tutoria->celular}}  </small></p>
          </div>
          </div>

      </div>
      </a>
    </div>

  </div>
</div>

@endforeach

</div>
@endif
<!-- Modal descripcon -->
<div class="modal fade" id="descripcion" tabindex="-1" role="dialog" aria-labelledby="descripconLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="descripcionLLabel">DESCRIPCIÓN DE TUTORIA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="justify-content-center align-items-center" >
            <form >


              <!-- Input de Titulo -->
              <div class="form-group row">
                <label for="titulo" class="col-form-label col-sm-3">Titulo:</label>
                <div class="col-sm-8">
                  <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo">
                </div>
              </div>




          </div>
        </div>
      </div>

          </form>
    </div>
  </div>
</div>

<!-- Modal registrar -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CREACIÓN DE TUTORIALES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="justify-content-center align-items-center" >
            <form method="POST" action="{{ route('tutorias.store') }}" >
              {{ csrf_field() }}

              <!-- Input de Titulo -->
              <div class="form-group row">
                <label for="titulo" class="col-form-label col-sm-3">Titulo:</label>
                <div class="col-sm-8">
                  <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo">
                </div>
              </div>

              <!-- Input de Nombre del tutor -->
              <div class="form-group row">
                <label for="nomtutor" class="col-form-label col-sm-3">Nombre del Tutor:</label>
                <div class="col-sm-8">
                  <input type="text" name="nomtutor" id="nomtutor" class="form-control" placeholder="Nombre del Tutor">
                </div>
              </div>

              <!-- Input de Materia -->
               <div class="form-group row">
                 <label for="materia" class="col-form-label  col-sm-3 ">Materia:</label>
                 <div class="col-sm-8">
                 <select id="materia" class="form-control" name="materia" required>
                     <option>Programación</option>
                     <option>Calculo</option>
                     <option>Otros</option>
                 </select>
                 </div>
                 @if ($errors->has('sede'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('sede') }}</strong>
                     </span>
                 @endif
             </div>

              <!-- Input de costo por hora -->
              <div class="form-group row">
                <label for="costo" class="col-form-label col-sm-3">Costo:</label>
                <div class="col-sm-8">
                  <input type="number" name="costo" id="costo" class="form-control" placeholder="Costo">
                </div>
              </div>

              <!-- Input de Ubicacion -->
              <div class="form-group row">
                <label for="ubicacion" class="col-form-label col-sm-3">Ubicación:</label>
                <div class="col-sm-8">
                  <input type="text" name="ubicacion" id="ubicación" class="form-control" placeholder="Ubicación" >
                </div>
              </div>

              <!-- Input de Descripción -->
              <div class="form-group row">
                <label for="descripcion" class="col-form-label col-sm-3">Descripción:</label>
                <div class="col-sm-8">
                  <textarea class="form-control" id="message-text" name="descripcion" placeholder="Descripción"></textarea>
                </div>
              </div>

            <!-- Input de Imagen -->
              <div class="form-group row">
              <label for="imagen" class="col-form-label col-sm-3">Imagen:</label>
              <div class="col-sm-8">
                <input type="file" class="form-control-file " id="imagen" name="imagen">
                </div>
             </div>


              <hr>
              <p class="h5">Información de Contacto:</p>

              <!-- Input de Celular -->
              <div class="form-group row">
                <label for="celular" class="col-form-label col-sm-3">Celular:</label>
                <div class="col-sm-9">
                  <input type="text" name="celular" id="celular" class="form-control" placeholder="Celular">
                </div>
              </div>


          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
          </form>
    </div>
  </div>
</div>

@endsection
