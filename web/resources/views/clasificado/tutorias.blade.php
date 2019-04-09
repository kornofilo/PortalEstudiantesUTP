@extends('layouts.app')

@section('content')
<!-- Button crear -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
  Crear Tutorias
</button>

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
            <form >

              <!-- Input de Titulo -->
              <div class="form-group row">
                <label for="titulo" class="col-form-label col-sm-3">Titulo:</label>
                <div class="col-sm-8">
                  <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo">
                </div>
              </div>

              <!-- Input de Nombre del tutor -->
              <div class="form-group row">
                <label for="tutor" class="col-form-label col-sm-3">Nombre del Tutor:</label>
                <div class="col-sm-8">
                  <input type="text" name="tutor" id="tutor" class="form-control" placeholder="Nombre del Tutor">
                </div>
              </div>

              <!-- Input de Materia -->
              <div class="form-group row">
                <label for="materia" class="col-form-label col-sm-3">Materia:</label>
                <div class="col-sm-8">
                  <input type="text" name="materia" id="materia" class="form-control" placeholder="Materia">
                </div>
              </div>

              <!-- Input de costo por hora -->
              <div class="form-group row">
                <label for="costo" class="col-form-label col-sm-3">Costo:</label>
                <div class="col-sm-8">
                  <input type="text" name="costo" id="costo" class="form-control" placeholder="Costo">
                </div>
              </div>

              <!-- Input de Ubicacion -->
              <div class="form-group row">
                <label for="ubicación" class="col-form-label col-sm-3">Ubicación:</label>
                <div class="col-sm-8">
                  <input type="text" name="ubicación" id="ubicación" class="form-control" placeholder="Ubicación" >
                </div>
              </div>

              <!-- Input de Descripción -->
              <div class="form-group row">
                <label for="descripcion" class="col-form-label col-sm-3">Descripción:</label>
                <div class="col-sm-8">
                  <textarea class="form-control" id="message-text" name="descripcion" placeholder="Descripción"></textarea>
                </div>
              </div>

              <hr>
              <p class="h5">Información de Contacto:</p>

              <!-- Input de Dirección -->
              <div class="form-group row">
                <label for="condireccion" class="col-form-label col-sm-3">Dirección:</label>
                <div class="col-sm-8">
                  <input type="text" name="condireccion" id="condireccion" class="form-control" placeholder="Dirección">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>

@endsection
