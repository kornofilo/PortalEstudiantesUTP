

<form action="{{ route('eventos.store')}}" method="POST" enctype="multipart/form-data">
 @csrf

 <!-- Input del Título del Evento-->
        <div class="form-group row">
          <label for="titulo" class="col-form-label col-sm-3">Título del Evento:</label>
          <div class="col-sm-8">
            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Título" required>
          </div>
        </div>

        <!-- Input de Fecha y Hora -->
              <div class="form-group row">
                <label for="fecha" class="col-form-label col-sm-3">Fecha y Hora:</label>
                <div class="col-sm-8">
                  <input type="date" name="fecha" id="fecha" class="form-control" placeholder="00/00/0000" required >
                </div>
              </div>

        <!-- Input de Lugar -->
            <div class="form-group row">
              <label for="lugar" class="col-form-label col-sm-3">Lugar:</label>
              <div class="col-sm-8">
                <input type="text" name="lugar" id="lugar" class="form-control" placeholder="Lugar" required>
              </div>
            </div>

            <!-- Input de Costo-->
            
                <div class="form-group row">
                  <label for="costo" class="col-form-label col-sm-3">Costo:</label>
                  <div class="col-sm-8">
                    <input type="number" name="costo"  min="0" max="9999" step="0.01" name="costo" id="costo" class="form-control" placeholder="B/." required>
                  </div>
                </div>
                <!-- Input de Facultades-->
                <div class="form-group row">
                     <label for="facultad_nomb" class="col-form-label col-sm-3">Facultades:</label>
                         <div class="col-sm-8">
                          <select id="facultad_nomb" class="form-control" name="facultad_nomb" required>
                            <option disabled selected>--Selecciona una Facultad--</option>
                             <option value="Ciencias Y Tecnología">Ciencias Y Tecnología</option>
                             <option value="Ingeniería Civil" >Ingeniería Civil</option>
                             <option value="Ingeniería de Sistemas computacionales">Ingeniería de Sistemas computacionales</option>
                             <option value="Ingeniería Eléctrica">Ingeniería Eléctrica</option>
                             <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                             <option value="Ingeniería Mecánica">Ingeniería Mecánica</option>
                         </select>
                         </div>
                 </div>
                    <!-- Input de Descripcion -->
                     <div class="form-group row">
                         <label for="descripcion" class="col-form-label col-sm-3">Descripción:</label>
                         <div class="col-sm-8">
                         <textarea class="form-control" id="message-text" name="descripcion" placeholder="Descripcion"></textarea required>
                           </div>
                     </div>

                      <!-- Input de Imagen-->
                      <div class="form-group row">
                         <label for="addfoto" class="col-form-label col-sm-3">Agregar Poster:</label>
                         <div class="col-sm-8">
                         <input type="file" name="imagen" id="imagen" class="form-control" placeholder="Add Foto" tabindex="1">
                         </div>
                     </div>

                      <!-- Modal Footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Publicar</button>
                      </div>
                    </form>
