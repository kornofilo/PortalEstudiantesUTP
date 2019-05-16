
<div class="form-group row">
<div class="col-sm-8">

  <!-- Detalles de tutorias -->
    <h4>{{$tutoria->titulo}}</h4>

    <div class="container">
    <div class="row ">
        
    <div class="text-left">
    <br>
    <label>Costo: {{$tutoria->costo}}</label>
    <br>
    <label>Ubicacion: {{$tutoria->ubicacion}}</label>
    <br>
    <label>Descripcion: {{$tutoria->descripcion}}</label> <br>
</div>
<br>
<div >
    <img style=" width: 300px; " src="/imagenes/clasificados/tutorias/{{$tutoria->imagen}}" 
     class=" rounded float-right img-responsive thumb margin10 img-thumbnail" >
    </div>
</div>
</div>
    <hr>

    <div class="col-sm-8">
    <p class="h5">Información de Contacto</p>
    <br>
      <label>Nombre del Contacto: {{$tutoria->nombre}}</label>
      <br>
      <label>Celular: {{$tutoria->celular}}</label>
      <br>
      <label>Email: {{$tutoria->email}}  </label>
      <br>
      <form action="/OtroPerfil" method="get">
        {{csrf_field()}}
        <input type="hidden" name="code" value="{{$tutoria->email}}">
        <input type="submit" class="btn-info" value="Ver perfil del anunciante">
      </form>
    </div>

    <hr>
    <!-- Código de la Publicación -->
    <div class="col-sm-8">
      <label>Código de la Publicación: {{$tutoria->codigoPost}}</label>

    </div>


</div>
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
</div>
