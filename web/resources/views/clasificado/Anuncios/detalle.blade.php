<div class="form-group row">
<div class="col-sm-8">

    <h4>{{isset($nombreArt)?$nombreArt:null}}</h4>
    <img style="height:200px; width: 200px; margin: 40px;" src="/imagenes/clasificado/anuncio/{{isset($imagen)?$imagen:null}}"  class="card-img-top">
    <br>
    <label>Precio: {{isset($precio)?$precio:null}}</label>
    <br>
    <label>Estado: {{isset($estado)?$estado:null}}</label>
    <br>
    <label>Descripcion: {{isset($descripcion)?$descripcion:null}}</label>
    <hr>

    <div class="col-sm-8">
    <p class="h5">Información de Contacto</p>
    <br>
      <label>Nombre del Contacto: {{isset($nombre)?$nombre." ".$anunciante['apellido']:null}}</label>
      <br>
      <label>Celular: {{isset($celular)?$celular:null}}</label>
      <br>
      <label>Email: {{isset($email)?$email:null}}</label>
      <br>
      <form action="/OtroPerfil" method="get">
        {{csrf_field()}}
        <input type="hidden" name="code" value="{{$email}}">
        <input type="submit" class="btn-info" value="Ver perfil del anunciante">
      </form>
    </div>

    <hr>
    <div class="col-sm-8">
      <label>Código de Publicación: {{isset($codigoPost)?$codigoPost:null}}</label>
    </div>

</div>
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
</div>
