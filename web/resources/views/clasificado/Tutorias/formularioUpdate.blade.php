<h2 class="h2-responsive text-center"><strong>{{$tutoria->titulo}} ({{$tutoria->codigoPost}})</strong></h2>
<form action="{{route('tutorias.update', $tutoria->id)}}" method="POST" enctype="multipart/form-data">
     @csrf
        <!-- Imagen actual del tutorias -->
        <div class="text-center">
            <img style="max-height: 400px; max-width: 400px;" class="img-thumbnail shadow" src="/imagenes/clasificados/tutorias/{{$tutoria->imagen}}">
        </div> <br>   

        <!-- Nueva Imagen -->
        <div class="form-group row p-2">
         <label for="imagen" class="col-form-label col-sm-3 font-weight-bold">Nueva Imagen</label>
         <input type="file" class="form-control-file col-sm-8" id="imagen" name="imagen" accept="image/*">
       </div>

       <!-- Título -->
       <div class="form-group row">
          <label for="titulo" class="col-form-label col-sm-3">Título:</label>
          <div class="col-sm-8">
            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo" value="{{$tutoria->titulo}}">
          </div>
        </div>

        <!-- Nombre del tutor -->
        <div class="form-group row">
            <label for="nombreTutor" class="col-form-label col-sm-3">Nombre del Tutor:</label>
            <div class="col-sm-8">
                <input type="text" name="nombreTutor" id="nombreTutor" class="form-control" placeholder="Nombre del Tutor" value="{{$tutoria->nombreTutor}}">
            </div>
        </div>

        <!-- Input de Materia -->
        <div class="form-group row">
            <label for="materia" class="col-form-label  col-sm-3 ">Materia:</label>
            <div class="col-sm-8">
                <select id="tutoria_materia_{{$tutoria->id}}" class="form-control" name="materia" required>
                    <option>Programación</option>
                    <option>Física</option>
                    <option>Química</option>
                    <option>Cálculo</option>
                    <option>Otros</option>
                </select>
            </div>
        </div>

        <!-- Input de costo por hora -->
        <div class="form-group row">
            <label for="costo" class="col-form-label col-sm-3">Costo por Hora:</label>
            <div class="col-sm-8">
                <input type="number" name="costo" id="costo" class="form-control" min="0" max="9999" step="0.01" oninput="validity.valid||(value=)" placeholder="Costo" value="{{$tutoria->costo}}">
            </div>
        </div>

        <!-- Input de Ubicacion -->
        <div class="form-group row">
            <label for="ubicacion" class="col-form-label col-sm-3">Ubicación:</label>
            <div class="col-sm-8">
                <input type="text" name="ubicacion" id="ubicación" class="form-control" placeholder="Ubicación" value="{{$tutoria->ubicacion}}">
            </div>
        </div>

        <!-- Input de Descripción -->
        <div class="form-group row">
            <label for="descripcion" class="col-form-label col-sm-3">Descripción:</label>
            <div class="col-sm-8">
                <textarea class="form-control" id="message-text" name="descripcion" placeholder="Descripción">{{$tutoria->descripcion}}</textarea>
            </div>
        </div>

        <!-- Informacion de Contacto -->
  <hr>
  <p class="h5">Información de Contacto:</p>

  <!-- Input de Celular -->
  <div class="form-group row">
    <label for="Celular" class="col-form-label col-sm-3">Celular:</label>
    <div class="col-sm-8">
      <input type="text" name="celular" id="celular" class="form-control" placeholder="Celular" tabindex="1" value="{{$tutoria->celular}}">
    </div>
  </div>

  <!-- Modal Footer -->
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    <button type="submit" class="btn btn-success">Publicar</button>
  </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#tutoria_materia_{{$tutoria->id}}').val('{{$tutoria->materia}}').change();
        });
    </script>

</form>
              