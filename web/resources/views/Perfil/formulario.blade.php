<form action="" method="POST" enctype="multipart/form-data">
 @csrf

 <!-- Input del Nombre-->
        <div class="form-group row">
          <label for="nombre" class="col-form-label col-sm-3">Nombre:</label>
          <div class="col-sm-8">
            <input class="form-control" id="nombre" name="nombre" value="{{auth()->user()->nombre}}" >
          </div>
        </div>

        <!-- Input de Fecha y Hora -->
              <div class="form-group row">
                <label for="apellido" class="col-form-label col-sm-3">Apellido:</label>
                <div class="col-sm-8">
                  <input class="form-control" id="apellido" name="apellido" value="{{auth()->user()->apellido}}">
                </div>
              </div>

        <!-- Input de Lugar -->
            <div class="form-group row">
              <label for="sexo" class="col-form-label col-sm-3">Sexo:</label>
              <div class="col-sm-8">
                <input class="form-control" id="sexo" name="sexo" value="{{auth()->user()->sexo}}" >
              </div>
            </div>

            <!-- Input de Costo-->
                <div class="form-group row">
                  <label for="sede" class="col-form-label col-sm-3">Sede:</label>
                  <div class="col-sm-8">
                    <input id="sede" name="sede" id="sede" class="form-control" value="{{auth()->user()->sede}}" >
                  </div>
                </div>
                <!-- Input de Facultades-->
                <div class="form-group row">
                  <label for="facultad" class="col-form-label col-sm-3">Facultad:</label>
                  <div class="col-sm-8">
                    <input id="facultad" name="facultad" id="facultad" class="form-control" value="{{auth()->user()->facultad}}" >
                  </div>
                </div>
                    <!-- Input de Descripcion -->
                     <div class="form-group row">
                         <label for="carrera" class="col-form-label col-sm-3">Carrera:</label>
                         <div class="col-sm-8">
                           <input class="form-control" name="carrera" id="carrera" value="{{auth()->user()->carrera}}" >
                           </div>
                     </div>

                      <!-- Input de Correo-->
                      <div class="form-group row">
                          <label for="correo" class="col-form-label col-sm-3">Correo:</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="correo" id="correo" value="{{auth()->user()->correo}}" disabled>
                            </div>
                      </div>
                      <!-- Input de Contraseña-->
                      <div class="form-group row">
                          <label for="contraseña" class="col-form-label col-sm-3">Contraseña:</label>
                          <div class="col-sm-8">
                            <input class="form-control" name="contraseña" id="contraseña" value="**********" disabled>
                            </div>
                      </div>

                      <!-- Modal Footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-warning">Actualizar</button>
                      </div>
                    </form>
