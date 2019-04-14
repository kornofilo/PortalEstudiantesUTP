<form action="{{ route('alquilerhospedajes.store')}}" method="POST" enctype="multipart/form-data">
       @csrf
       <div class="form-group row">
            <label for="categoria" class="col-form-label col-sm-3">Categorías:</label>
                <div class="col-sm-8">
                 <select id="categoria" class="form-control" name="categoria" required>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Cuartos" >Cuarto</option>
                    <option value="Casa">Casa</option>
                </select>
                </div>
        </div>

        <div class="form-group row">
            <label for="titulo" class="col-form-label col-sm-3">Título:</label>
            <div class="col-sm-8">
            <input type="text"  name="titulo" id="titulo" class="form-control" placeholder="Título" tabindex="1">
            </div>
        </div>


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
                <textarea class="form-control"  id="descripcion" name="descripcion" placeholder="Descripción"></textarea>
                </div>
              </div>
  

        <div class="form-group row">
            <label for="precio" class="col-form-label col-sm-3">Precio por Mes:</label>
            <div class="col-sm-8">
            <input id="precio" type="number" name="precio"  min="1" max="9999" step="0.01"  placeholder="B/" oninput="validity.valid||(value='');" required>
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
               </select>
                </div>
              </div>

              <!-- Input de habitaciones -->
              <div class="form-group row">
                <label for="habitaciones" class="col-form-label col-sm-3">Habitaciones:</label>
                <div class="col-sm-8">
                <input id="habitaciones" name="habitaciones" type="number" min="1" max="99" step="1" oninput="validity.valid||(value='');" required>
                </div>
              </div>

               <!-- Input de Baños -->
               <div class="form-group row">
                <label for="habitaciones" class="col-form-label col-sm-3">Baños:</label>
                <div class="col-sm-8">
                <input id="baños" name="baños" type="number" min="1" max="99" step="1" oninput="validity.valid||(value='');" required>
                </div>
              </div>

              <!-- Input de Amueblada -->
              <div class="form-group row">
                <label for="amueblada" class="col-form-label col-sm-3">Amueblada:</label>
                <div class="col-sm-8">
                <select id="amueblado" class="form-control" name="amueblado" required>
                    <option value="No">No</option>
                    <option>Sí</option>
                </select>
                </div>
              </div>
              <hr>
               
              
        
         <div class="form-group row">
            <label for="addfoto" class="col-form-label col-sm-3">Agregar Fotos:</label>
            <div class="col-sm-8">
            <input type="file" name="addfoto" id="imagen" class="form-control" placeholder="Add Foto" tabindex="1">
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
