<h2 class="h2-responsive text-center"><strong>{{$alquilerhosp->titulo}} ({{$alquilerhosp->codigoPost}})</strong></h2>
<form action="{{route('alquilerhospedajes.update', $alquilerhosp->id)}}" method="POST" enctype="multipart/form-data">
     @csrf
     
     <!-- Imagen actual del tutorias -->
     <div class="text-center">
            <img style="max-height: 400px; max-width: 400px;" class="img-thumbnail shadow" src="/imagenes/clasificados/hospedador/{{$alquilerhosp->imagen}}">
        </div> <br>   

        <!-- Nueva Imagen -->
        <div class="form-group row p-2">
         <label for="imagen" class="col-form-label col-sm-3 font-weight-bold">Nueva Imagen</label>
         <input type="file" class="form-control-file col-sm-8" id="imagen" name="imagen" accept="image/*">
       </div>

       <div class="form-group row">
        <label for="categoria" class="col-form-label col-sm-3">Categorías:</label>
        <div class="col-sm-8">
            <select id="alqhos_categoria_{{$alquilerhosp->id}}" class="form-control" name="categoria" required>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Cuarto" >Cuarto</option>
                    <option value="Casa">Casa</option>
                </select>
            </div>
        </div>

       <div class="form-group row">
            <label for="titulo" class="col-form-label col-sm-3">Título:</label>
            <div class="col-sm-8">
            <input type="text"  name="titulo" id="titulo" class="form-control" placeholder="Título" tabindex="1" value="{{$alquilerhosp->titulo}}">
            </div>
        </div>


        <div class="form-group row">
            <label for="ubicacion" class="col-form-label col-sm-3">Ubicación:</label>
            <div class="col-sm-8">
            <input type="text" name="ubicacion" id="ubicacion" class="form-control" placeholder="Ubicación" tabindex="1" value="{{$alquilerhosp->ubicacion}}">
            </div>
        </div>


        <!-- Input de descripcion -->
        <div class="form-group row">
                <label for="descripcion" class="col-form-label col-sm-3">Descripción:</label>
                <div class="col-sm-8">
                <textarea class="form-control"  id="descripcion" name="descripcion" placeholder="Descripción">{{$alquilerhosp->descripcion}}</textarea>
                </div>
              </div>


        <div class="form-group row">
            <label for="precio" class="col-form-label col-sm-3">Precio por Mes:</label>
            <div class="col-sm-8">
            <input class="form-control" id="precio" type="number" name="precio"  min="0" max="9999" step="0.01"  placeholder="B/." oninput="validity.valid||(value='');" value="{{$alquilerhosp->precio}}" required>
            </div>
        </div>


        <hr>
        <p class="h5">Detalles:</p>

        <!-- Input de Estacionamiento -->
              <div class="form-group row">
                <label for="estacionamiento" class="col-form-label col-sm-3">Estacionamiento:</label>
                <div class="col-sm-8">
                <select id="alqhos_estacionamiento_{{$alquilerhosp->id}}" class="form-control" name="estacionamiento" required>
                    <option value="No">No</option>
                    <option value="Sí">Sí</option>
               </select>
                </div>
              </div>

              <!-- Input de habitaciones -->
              <div class="form-group row">
                <label for="habitaciones" class="col-form-label col-sm-3">Habitaciones:</label>
                <div class="col-sm-8">
                <input class="form-control" id="habitaciones" name="habitaciones" type="number" min="1" max="99" step="1" oninput="validity.valid||(value='');" value="{{$alquilerhosp->habitaciones}}" required>
                </div>
              </div>

               <!-- Input de Baños -->
               <div class="form-group row">
                <label for="habitaciones" class="col-form-label col-sm-3">Baños:</label>
                <div class="col-sm-8">
                <input class="form-control" id="baños" name="baños" type="number" min="1" max="99" step="1" oninput="validity.valid||(value='');" value="{{$alquilerhosp->baños}}" required>
                </div>
              </div>

              <!-- Input de Amueblada -->
              <div class="form-group row">
                <label for="amueblado" class="col-form-label col-sm-3">Amueblada:</label>
                <div class="col-sm-8">
                <select id="alqhos_amueblado_{{$alquilerhosp->id}}" class="form-control" name="amueblado" required>
                    <option value="No">No</option>
                    <option value="Sí">Sí</option>
                </select>
                </div>
              </div>
              <hr>

               <!-- Informacion de Contacto -->
        <hr>
        <p class="h5">Información de Contacto:</p>



        <!-- Input de Celular -->
        <div class="form-group row">
          <label for="Celular" class="col-form-label col-sm-3">Celular:</label>
          <div class="col-sm-8">
            <input type="text" name="celular" id="celular" class="form-control" placeholder="Celular" tabindex="1" value="{{$alquilerhosp->celular}}">
          </div>
        </div>


        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Publicar</button>
        </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#alqhos_categoria_{{$alquilerhosp->id}}').val('{{$alquilerhosp->categoria}}').change();
            $('#alqhos_estacionamiento_{{$alquilerhosp->id}}').val('{{$alquilerhosp->estacionamiento}}').change();
            $('#alqhos_amueblado_{{$alquilerhosp->id}}').val('{{$alquilerhosp->amueblado}}').change();

        });
    </script>

</form>