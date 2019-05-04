
<div class="form-group row">
<div class="col-sm-8">

  <!-- Detalles de tutorias -->
    <h4>{{isset($titulo)?$titulo:null}}</h4>
    <div class="container">
    <div class="row ">
        
    <div class="text-left">
    <br>
    <label>Costo: {{isset($costo)?$costo:null}}</label>
    <br>
    <label>Ubicacion: {{isset($ubicacion)?$ubicacion:null}}</label>
    <br>
    <label>Descripcion: {{isset($descripcion)?$descripcion:null}}</label> <br>
</div>
<br>
<div >
    <img style=" width: 300px; " src="/imagenes/clasificado/tutorias/{{isset($imagen)?$imagen:null}}" 
     class=" rounded float-right img-responsive thumb margin10 img-thumbnail" >
    </div>
</div>
</div>
    <hr>

    <div class="col-sm-8">
    <p class="h5">Información de Contacto</p>
    <br>
      <label>Nombre del Contacto: {{isset($nombre)?$nombre:null}}</label>
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
    <!-- Código de la Publicación -->
    <div class="col-sm-8">
      <label>Código de la Publicación: {{isset($codigoPost)?$codigoPost:null}}</label>
    </div>


</div>
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
</div>
