    <h4 class="text-center">{{$anuncio->nombreArt}}</h4> <br>
    <div class="text-center">
      <img style="max-height: 500px; max-width: 500px;" class="img-thumbnail" src="/imagenes/clasificados/anuncios/{{$anuncio->imagen}}">
    </div>
    <br>
    <label>Precio: {{$anuncio->precio}}</label>
    <br>
    <label>Estado: {{$anuncio->estado}}</label>
    <br>
    <label>Descripcion: {{$anuncio->descripcion}}</label>
    <hr>

    <p class="h5">Información de Contacto</p>
    <br>
      <label>Nombre del Contacto: {{$anuncio->nombre}}</label>
      <br>
      <label>Celular: {{$anuncio->celular}}</label>
      <br>
      <label>Email: {{$anuncio->email}}</label>
      <br>
      <form action="/OtroPerfil" method="get">
        {{csrf_field()}}
        <input type="hidden" name="code" value="">
        <input type="submit" class="btn-info" value="Ver perfil del anunciante">
      </form>

    <hr>
    <div class="col-sm-8">
      <label>Código de Publicación: {{$anuncio->codigoPost}}</label>
    </div>
<div class="modal-footer">
    <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
</div>
