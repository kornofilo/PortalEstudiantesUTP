<h2 class="h2-responsive text-center"><strong>{{$bolsatrabajo->titulo}} ({{$bolsatrabajo->codigoPost}})</strong></h2>
<form action="{{route('bolsaDetrabajo.update', $bolsatrabajo->id)}}" method="POST" enctype="multipart/form-data">
     @csrf

    <!-- Imagen actual del anuncio -->
    <div class="text-center">
            <img style="max-height: 400px; max-width: 400px;" class="img-thumbnail shadow" src="/imagenes/bolsatrabajo/{{$bolsatrabajo->imagen}}">
    </div> <br>   

     <!-- Nueva Imagen -->
     <div class="form-group row p-2">
         <label for="imagen" class="col-form-label col-sm-3 font-weight-bold">Nueva Imagen</label>
         <input type="file" class="form-control-file col-sm-8" id="imagen" name="imagen" accept="image/*">
    </div>

    <!-- Título del anuncio -->
    <div class="form-group row p-2">
        <label for="titulo" class="col-form-label col-sm-3 font-weight-bold">Título de la oferta de trabajo:</label>
        <input type="text" name="titulo" id="titulo" class="form-control col-sm-8" value="{{$bolsatrabajo->titulo}}" required>
    </div>

    <!-- Urgencia del Anuncio -->
    <div class="col-md-12">
            <div class="form-group">
                <strong>Urgente :</strong><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="Si" name="urgente" value="Sí" {{($bolsatrabajo->urgente=="Sí")? "checked" : "" }}>
                    <label class="form-check-label" for="Si">Sí</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="No" name="urgente" value="No" {{($bolsatrabajo->urgente=="No")? "checked" : "" }}> 
                    <label class="form-check-label" for="No">No</label>
                </div>
            </div>
    </div>

    <!-- Ubicación de la vacante -->
    <div class="form-group row p-2">
        <label for="ubicacion" class="col-form-label col-sm-3 font-weight-bold">Ubicación:</label>
        <input type="text" name="ubicacion" id="ubicacion" class="form-control col-sm-8" value="{{$bolsatrabajo->ubicacion}}" required>
    </div>

    <!-- Título del anuncio -->
    <div class="form-group row p-2">
        <label for="empresa" class="col-form-label col-sm-3 font-weight-bold">Empresa:</label>
        <input type="text" name="empresa" id="empresa" class="form-control col-sm-8" value="{{$bolsatrabajo->empresa}}" required>
    </div>

    <!-- Tipo de Puesto -->
    <div class="form-group row p-2">
        <label for="tipoPuesto" class="col-form-label col-sm-3 font-weight-bold">Tipo de Puesto:</label>
        <select id="tipoPuesto" class="form-control col-sm-8" name="tipoPuesto" required>
            <option value="Tiempo Completo">Tiempo Completo</option>
            <option value="Tiempo Parcial">Tiempo Parcial</option>
            <option value="Contrato/Temporario">Contrato/Temporario</option>
        </select>
    </div> 
    <hr>
    <p class="h5">Detalles:</p>
    <!-- Salario de la vacante -->
    <div class="form-group row p-2">
        <label for="salario" class="col-form-label col-sm-3 font-weight-bold">Salario Estimado:</label>
        <input type="number" name="salario"  min="0" max="9999" step="0.01" class="form-control col-sm-8" value="{{$bolsatrabajo->salario}}">
    </div>   

    <!-- Dirección -->
    <div class="form-group row p-2">
        <label for="direccion" class="col-form-label col-sm-3 font-weight-bold">Dirección:</label>
        <textarea class="form-control col-sm-8" name="direccion" rows="4" cols="80">{{$bolsatrabajo->direccion}}</textarea>
    </div>

    <!-- Descripción -->
    <div class="form-group row p-2">
        <label for="descripcion" class="col-form-label col-sm-3 font-weight-bold">Descripción:</label>
        <textarea class="form-control col-sm-8" name="descripcion" rows="4" cols="80">{{$bolsatrabajo->descripcion}}</textarea>
    </div>

    <!-- Habilidades -->
    <div class="form-group row p-2">
        <label for="habilidades" class="col-form-label col-sm-3 font-weight-bold">Habilidades:</label>
        <textarea class="form-control col-sm-8" name="habilidades" rows="4" cols="80">{{$bolsatrabajo->habilidades}}</textarea>
    </div>

     <!-- Fecha -->
     <div class="form-group row p-2">
        <label for="fecha" class="col-form-label col-sm-3 font-weight-bold">Fecha:</label>
        <input type="date" name="fecha" class="form-control col-sm-8" value="{{$bolsatrabajo->fecha}}">
    </div> 

    <!-- Beneficios -->
    <div class="form-group row p-2">
        <label for="beneficio" class="col-form-label col-sm-3 font-weight-bold">Beneficios:</label>
        <textarea class="form-control col-sm-8" name="beneficio" rows="4" cols="80">{{$bolsatrabajo->beneficio}}</textarea>
    </div>

    <hr>
    <p class="h5">Información de Contacto:</p>
    <!-- Nombre del Contacto  -->
    <div class="form-group row p-2">
        <label for="nombreContacto" class="col-form-label col-sm-3 font-weight-bold">Nombre:</label>
        <input type="text" name="nombreContacto" id="nombreContacto" class="form-control col-sm-8" value="{{$bolsatrabajo->nombreContacto}}" required>
    </div>

    <!-- Celular del Contacto  -->
    <div class="form-group row p-2">
        <label for="celular" class="col-form-label col-sm-3 font-weight-bold">Celular:</label>
        <input type="text" name="celular" id="celular" class="form-control col-sm-8" value="{{$bolsatrabajo->celular}}" required>
    </div>

     <!-- Email del Contacto  -->
     <div class="form-group row p-2">
        <label for="emailContacto" class="col-form-label col-sm-3 font-weight-bold">Email:</label>
        <input type="text" name="emailContacto" id="emailContacto" class="form-control col-sm-8" value="{{$bolsatrabajo->emailContacto}}" required>
    </div>

    <!-- Modal Footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </div>     

         
</form>

<script type="text/javascript">
    $(document).ready(function (){
        $('#tipoPuesto').val("{{$bolsatrabajo->tipoPuesto}}").change();
    });
</script>