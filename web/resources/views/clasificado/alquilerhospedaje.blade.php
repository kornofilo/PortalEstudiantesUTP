@extends('layouts.app')

@section('content')
<!-- Button crear -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Nuevo anuncio
</button>

<!-- Modal registrar -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CREAR ANUNCIO ALQUILER/HOSPEDAJE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="justify-content-center align-items-center" >
            <form >

              <!-- Input de categoria -->
              <div class="form-group row">
                <label for="categoria" class="col-form-label col-sm-3">Catedoría:</label>
                <div class="col-sm-8">
                <select id="categoria" class="form-control" name="categoria" required>
                    <option value="Apartamento">Apartamento</option>
                    <option>Casa</option>
                    <option>Cuarto</option>
                </select>
                </div>
              </div>

              <!-- Input de ubicacion -->
              <div class="form-group row">
                <label for="ubicacion" class="col-form-label col-sm-3">Ubicación:</label>
                <div class="col-sm-8">
                  <input type="text" name="ubicacion" id="ubicacion" class="form-control" placeholder="Ubicación" tabindex="1">
                </div>
              </div>

              <!-- Input de descripcion -->
              <div class="form-group row">
                <label for="descripcion" class="col-form-label col-sm-3">Descripción:</label>
                <div class="col-sm-8">
                <textarea class="form-control" id="message-text" name="descripcion" placeholder="Descripción"></textarea>
                </div>
              </div>

              <!-- Input de precio x mes -->
              <div class="form-group row">
                <label for="precioxmes" class="col-form-label col-sm-3">Precio por Mes:</label>
                <div class="col-sm-8">
                  <input type="text" name="precioxmes" id="precioxmes" class="form-control" placeholder="Precio por Mes" tabindex="1">
                </div>
              </div>
              <hr>
              <p class="h5">Detalles:</p>
              
              <!-- Input de Estacionamiento -->
              <div class="form-group row">
                <label for="estacionamiento" class="col-form-label col-sm-3">Estacionamiento:</label>
                <div class="col-sm-8">
                <select id="estacionamiento" class="form-control" name="estacionamiento" required>
                    <option value="No">No</option>
                    <option>Sí</option>
                </div>
              </div>

              <!-- Input de habitaciones -->
              <div class="form-group row">
                <label for="habitaciones" class="col-form-label col-sm-3">Habitaciones:</label>
                <div class="col-sm-8">
                  <button id="subtract" class="remove-button md-btn" style="width: 33%; min-width: 0; float: left; height: 30px;"><i class="material-icons">remove</i></button>
                  <input type="text" class="md-input" id="countuno" name="count" onClick="this.setSelectionRange(0, this.value.length);" style="width: 33%; min-width: 0; float: left; margin: 0; text-align: center; height: 30px;" value='0'  />
                  <button id="add" class="add-button md-btn md-btn-success"  style="width: 33%; min-width: 0; float: left; height: 30px;"><i class="material-icons">add</i></button>
                </div>
              </div>

               <!-- Input de Baños -->
               <div class="form-group row">
                <label for="habitaciones" class="col-form-label col-sm-3">Baños:</label>
                <div class="col-sm-8">
                  <button id="subtract" class="remove-button md-btn" style="width: 33%; min-width: 0; float: left; height: 30px;"><i class="material-icons">remove</i></button>
                  <input type="text" class="md-input" id="countdos" name="count" onClick="this.setSelectionRange(0, this.value.length);" style="width: 33%; min-width: 0; float: left; margin: 0; text-align: center; height: 30px;" value='0'  />
                  <button id="add" class="add-button md-btn md-btn-success"  style="width: 33%; min-width: 0; float: left; height: 30px;"><i class="material-icons">add</i></button>
                </div>
              </div>

              <!-- Input de Amueblada -->
              <div class="form-group row">
                <label for="amueblada" class="col-form-label col-sm-3">Estacionamiento:</label>
                <div class="col-sm-8">
                <select id="amueblada" class="form-control" name="amueblada" required>
                    <option value="No">No</option>
                    <option>Sí</option>
                </div>
              </div>
              <hr>
               <!-- Input de agregar foto -->
               <div class="form-group row">
                <label for="addpicture" class="col-form-label col-sm-3">Agregar Foto:</label>
                <div class="col-sm-8">
                <select id="addpicture" class="form-control" name="addpicture" required>
                    <option value="No">No</option>
                    <option>Sí</option>
                </div>
              </div>

              <hr>
              <p class="h5">Información de Contacto:</p>

              <!-- Input de Nombre Contacto -->
              <div class="form-group row">
                <label for="contacto" class="col-form-label col-sm-3">Nombre Contacto:</label>
                <div class="col-sm-8">
                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del Contacto" tabindex="1">
                </div>
              </div>

              <!-- Input de Celular -->
              <div class="form-group row">
                <label for="Celular" class="col-form-label col-sm-3">Celular:</label>
                <div class="col-sm-8">
                  <input type="text" name="celular" id="celular" class="form-control" placeholder="celular" tabindex="1">
                </div>
              </div>

              <!-- Input de Correo -->
              <div class="form-group row">
                <label for="correo" class="col-form-label col-sm-3">Correo:</label>
                <div class="col-sm-8">
                  <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo" tabindex="1">
                </div>
              </div>

              <!-- Input de Dirección -->
              <div class="form-group row">
                <label for="condireccion" class="col-form-label col-sm-3">Dirección:</label>
                <div class="col-sm-8">
                  <input type="text" name="condireccion" id="condireccion" class="form-control" placeholder="Dirección" tabindex="1">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Publicar</button>
      </div>
    </div>
  </div>
</div>
@endsection
