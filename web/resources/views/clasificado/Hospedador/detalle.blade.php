

<div class="form-group row">
<div class="col-sm-8">

    <h4>{{$alquilerhosp->titulo}}</h4>
    <img style="height:200px; width: 200px; margin: 40px;" src="/imagenes/clasificados/hospedador/{{$alquilerhosp->imagen}}"  class="card-img-top">
    <br>
    <label>Precio por mes: {{$alquilerhosp->precio}}</label>
    <br>
    <label>Ubicación: {{$alquilerhosp->ubicacion}}</label>
    <br>
    <label>Descripción: {{$alquilerhosp->descripcion}}</label>
    <hr>
    
    <h3>Detalles</h3>
    <br>
    <label>Estacionamiento: {{$alquilerhosp->estacionamiento}}</label>
    <br>
    <label>Habitaciones: {{$alquilerhosp->habitaciones}}</label>
    <br>
    <label>Baños: {{$alquilerhosp->baños}}</label>
    <br>
    <label>Amueblada: {{$alquilerhosp->amueblado}}</label>
    <hr>
    <div class="col-sm-8">
    <p class="h5">Información de Contacto</p>
    <br>
      <label>Nombre del Contacto: {{$alquilerhosp->nombre}}</label>
      <br>
      <label>Celular: {{$alquilerhosp->celular}}</label>
      <br>
      <label>Email: {{$alquilerhosp->email}}</label>
      <br>
      <form action="/OtroPerfil" method="get">
        {{csrf_field()}}
        <input type="hidden" name="code" value="">
        <input type="submit" class="btn-info" value="Ver perfil del anunciante">
      </form>
    </div>

    <hr>
    <div class="col-sm-8">
      <label>Código de Publicación: {{$alquilerhosp->codigoPost}}</label>
    </div>

</div>
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
</div>
