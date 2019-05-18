<h2 class="h2-responsive text-center"><strong>{{$evento->titulo}} ({{$evento->codigoPost}})</strong></h2>
<form action="{{route('eventos.update', $evento->id)}}" method="POST" enctype="multipart/form-data">
     @csrf
        <!-- Imagen actual del evento -->
        <div class="text-center">
            <img style="max-height: 400px; max-width: 400px;" class="img-thumbnail shadow" src="/imagenes/eventos/{{$evento->imagen}}">
        </div> <br>   

        <!-- Nueva Imagen -->
        <div class="form-group row p-2">
         <label for="imagen" class="col-form-label col-sm-3 font-weight-bold">Nueva Imagen</label>
         <input type="file" class="form-control-file col-sm-8" id="imagen" name="imagen" accept="image/*">
       </div>
                   
        <!-- Título del Evento -->
        <div class="form-group row p-2">
            <label for="titulo" class="col-form-label col-sm-3 font-weight-bold">Título del Evento:</label>
            <input type="text" name="titulo" id="titulo" class="form-control col-sm-8" value="{{$evento->titulo}}" required>
        </div>

        <!-- Fecha del Evento -->
        <div class="form-group row p-2">
            <label for="fecha" class="col-form-label col-sm-3 font-weight-bold">Fecha:</label>
            <input type="date" name="fecha" id="fecha" class="form-control col-sm-8" value="{{$evento->fecha}}" required>
        </div> 

        <!-- Hora del Evento -->
        <div class="form-group row p-2">
            <label for="hora" class="col-form-label col-sm-3 font-weight-bold">Hora:</label>
            <input type="time" name="hora" id="hora" class="form-control col-sm-8" value="{{$evento->hora}}" required>
        </div>  

        <!-- Lugar del Evento -->
        <div class="form-group row p-2">
            <label for="lugar" class="col-form-label col-sm-3 font-weight-bold">Lugar:</label>
            <input type="text" name="lugar" id="lugar" class="form-control col-sm-8" value="{{$evento->lugar}}" required>
        </div>

        <!-- Costo del Evento -->
        <div class="form-group row p-2">
            <label for="costo" class="col-form-label col-sm-3 font-weight-bold">Costo:</label>
            <input type="number" name="costo"  min="0" max="9999" step="0.01" class="form-control col-sm-8" value="{{$evento->costo}}">
        </div>

  

        <!-- Facultad del Evento -->
        <div class="form-group row p-2">
            <label for="costo" class="col-form-label col-sm-3 font-weight-bold">Facultad:</label>
            <select id="evento_facultad_nomb_{{$evento->id}}" name="facultad_nomb" class="form-control col-sm-8" required>
                <option value="Facultad de Ciencias y Tecnología">Facultad de Ciencias y Tecnología</option>
                <option value="Facultad de Ingeniería Civil">Facultad de Ingeniería Civil</option>
                <option value="Facultad de Ingeniería Eléctrica">Facultad de Ingeniería Eléctrica</option>
                <option value="Facultad de Ingeniería Industrial">Facultad de Ingeniería Industrial</option>
                <option value="Facultad de Ingeniería Mecánica">Facultad de Ingeniería Mecánica</option>
                <option value="Facultad de Ingeniería de Sistemas Computacionales">Facultad de Ingeniería de Sistemas Computacionales</option>
            </select>
        </div>

        <!-- Descripción del Evento -->
        <div class="form-group row p-2">
            <label for="descripcion" class="col-form-label col-sm-3 font-weight-bold">Descripción:</label>
            <textarea class="form-control col-sm-8" name="descripcion" rows="4" cols="80">{{$evento->descripcion}}</textarea>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </div> 
        <script type="text/javascript">
            $(document).ready(function () {
            $('#evento_facultad_nomb_{{$evento->id}}').val('{{$evento->facultad_nomb}}').change();
        })
</script>       
</form>   

