<form action="{{ route('tutorias.store')}}" method="POST" enctype="multipart/form-data">
 @csrf
 <!-- Input de Titulo -->
        <div class="form-group row">
          <label for="titulo" class="col-form-label col-sm-3">Titulo:</label>
          <div class="col-sm-8">
            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo">
          </div>
        </div>

        <!-- Input de Nombre del tutor -->
            <div class="form-group row">
              <label for="nombreTutor" class="col-form-label col-sm-3">Nombre del Tutor:</label>
              <div class="col-sm-8">
                <input type="text" name="nombreTutor" id="nombreTutor" class="form-control" placeholder="Nombre del Tutor">
              </div>
            </div>

            <!-- Input de Materia -->
                 <div class="form-group row">
                   <label for="materia" class="col-form-label  col-sm-3 ">Materia:</label>
                   <div class="col-sm-8">
                   <select id="materia" class="form-control" name="materia" required>
                       <option>Programación</option>
                       <option>Cálculo</option>
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
                       <input type="number" name="costo" id="costo" class="form-control" min="1" max="99" step="0.01" oninput="validity.valid||(value=)" placeholder="Costo">



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
                               <label for="addfoto" class="col-form-label col-sm-3">Agregar Fotos:</label>
                               <div class="col-sm-8">
                               <input type="file" name="imagen" id="imagen" class="form-control" placeholder="Add Foto" >
                               </div>
                           </div>


  <!-- Informacion de Contacto -->
  <hr>
  <p class="h5">Información de Contacto:</p>

  <!-- Input de Celular -->
  <div class="form-group row">
    <label for="Celular" class="col-form-label col-sm-3">Celular:</label>
    <div class="col-sm-8">
      <input type="text" name="celular" id="celular" class="form-control" placeholder="Celular" tabindex="1">
    </div>
  </div>



  <!-- Modal Footer -->
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    <button type="submit" class="btn btn-success">Publicar</button>
  </div>

</form>
