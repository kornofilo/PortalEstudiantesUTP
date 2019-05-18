<h2 class="h2-responsive text-center"><strong>{{$anuncio->nombreArt}} ({{$anuncio->nombreArt}})</strong></h2>
<form action="{{route('anuncios.update', $anuncio->id)}}" method="POST" enctype="multipart/form-data">
     @csrf

    <!-- Imagen actual del anuncio -->
    <div class="text-center">
            <img style="max-height: 400px; max-width: 400px;" class="img-thumbnail shadow" src="/imagenes/clasificados/anuncios/{{$anuncio->imagen}}">
    </div> <br>   

    <!-- Nueva Imagen -->
    <div class="form-group row p-2">
        <label for="imagen" class="col-form-label col-sm-3 font-weight-bold">Nueva Imagen</label>
        <input type="file" class="form-control-file col-sm-8" id="imagen" name="imagen" accept="image/*">
    </div>

    <!-- Categoría del Anuncio -->
    <div class="form-group row">
        <label for="categoria" class="col-form-label col-sm-3">Categoría:</label>
        <div class="col-sm-8">
            <select id="anuncio_categoria_{{$anuncio->id}}" class="form-control" name="categoria" required>
                <option value="Compra" >Compra</option>
                <option value="Venta">Venta</option>
            </select>
        </div>
    </div>

    <!-- Nombre del Artículo -->
    <div class="form-group row">
        <label for="nombreArticulo" class="col-form-label col-sm-3">Nombre del Articulo:</label>
        <div class="col-sm-8">
            <input type="text" name="nombreArt" id="nombreArt" class="form-control" value="{{$anuncio->nombreArt}}" tabindex="1">
        </div>
    </div>

    <!-- Precio del Artículo -->
    <div class="form-group row">
        <label for="precio" class="col-form-label col-sm-3">Precio:</label>
        <div class="col-sm-8">
            <input class="form-control" id="precio" type="number" name="precio"  min="0" max="9999" step="0.01"  placeholder="B/." value="{{$anuncio->precio}}" required>
        </div>
    </div>

    <!-- Estado del Artículo -->
    <div class="form-group row">
        <label for="estado" class="col-form-label col-sm-3">Estado:</label>
        <div class="col-sm-8">
            <select id="anuncio_estado_{{$anuncio->id}}" class="form-control" name="estado" required>
                <option value="Nuevo">Nuevo</option>
                <option value="Usado">Usado</option>
            </select>
        </div>
    </div>

    <!-- Descripción del Artículo -->
    <div class="form-group row">
        <label for="descripcion" class="col-form-label col-sm-3">Descripción:</label>
        <div class="col-sm-8">
            <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">{{$anuncio->descripcion}}</textarea>
       </div>
    </div>

    <!-- Informacion de Contacto -->
    <hr>
    <p class="h5">Información de Contacto:</p>

    <!-- Input de Celular -->
    <div class="form-group row">
        <label for="Celular" class="col-form-label col-sm-3">Celular:</label>
        <div class="col-sm-8">
            <input type="text" name="celular" id="celular" class="form-control" placeholder="Celular" value="{{$anuncio->celular}}" tabindex="1">
        </div>
    </div>

    <!-- Modal Footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </div>   

    <script type="text/javascript">
        $(document).ready(function () {
            $('#anuncio_estado_{{$anuncio->id}}').val('{{$anuncio->estado}}').change();
            $('#anuncio_categoria_{{$anuncio->id}}').val('{{$anuncio->categoria}}').change();
        });
    </script>

</form>