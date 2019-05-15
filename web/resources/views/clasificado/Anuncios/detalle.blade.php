<div class="form-group row">
<div class="col-sm-8">

    <h4>{{$anuncio->nombreArt}}</h4>
    <img style="height:200px; width: 200px; margin: 40px;" src="/imagenes/clasificado/anuncio/{{$anuncio->imagen}}"  class="card-img-top">
    <br>
    <label>Precio: {{$anuncio->precio}}</label>
    <br>
    <label>Estado: {{$anuncio->estado}}</label>
    <br>
    <label>Descripcion: {{$anuncio->descripcion}}</label>
    <hr>

    <div class="col-sm-8">
    <p class="h5">Información de Contacto</p>
    <br>
      <label>Nombre del Contacto: {{$anuncio->nombreArt}}</label>
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
    </div>

    <hr>
    <div class="col-sm-8">
      <label>Código de Publicación: {{$anuncio->codigoPost}}</label>
    </div>

</div>
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
</div>
