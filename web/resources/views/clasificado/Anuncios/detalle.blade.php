    <h4 class="text-center">{{$anuncio->nombreArt}}</h4> <br>
    <div class="text-center">
      <img style="max-height: 500px; max-width: 500px;" class="img-thumbnail" src="/imagenes/clasificados/anuncios/{{$anuncio->imagen}}">
    </div>
    <p><i class="fas fa-exchange-alt"></i> {{$anuncio->categoria}}</p>
    <p><i class="fas fa-heart"></i> Estado: {{$anuncio->estado}}</p>
    <p><i class="fas fa-info"></i> Descripción del Artículo: {{$anuncio->descripcion}}</p>
    <hr>

    <p class="h5">Información de Contacto</p>
      <label>Nombre del Contacto: {{$anuncio->nombre}}</label>
      <br>
      <label>Celular: {{$anuncio->celular}}</label>
      <br>
      <label>Email: {{$anuncio->email}}</label>
      <br>
      <form action="/OtroPerfil" method="get">
        {{csrf_field()}}
        <input type="hidden" name="code" value="">
        <button type="submit" class="btn btn-info">
          Ver perfil del anunciante
        </button>
      </form>

    <hr>
      <p class="h5 bold-text">Información de la Publicación</p>
      <p><i class="fas fa-ticket-alt"></i> Código de Publicación: {{$anuncio->codigoPost}}</p> 
      <p><i class="fas fa-clock"></i> Publicado {{$anuncio->created_at->diffForHumans()}}</p> 
<div class="modal-footer">
    <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
</div>
