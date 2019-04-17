<div class="form-group row">
<div class="col-sm-8">

  <!-- Detalles de tutorias -->
    <h4>{{isset($titulo)?$titulo:null}}</h4>
    <img style="height:200px; width: 200px; margin: 40px;" src="/imagenes/clasificado/tutorias/{{isset($imagen)?$imagen:null}}"  class="pull-left img-responsive thumb margin10 img-thumbnail">
    <br>
    <label>Costo: {{isset($costo)?$costo:null}}</label>
    <br>
    <label>Ubicacion: {{isset($ubicacion)?$ubicacion:null}}</label>
    <br>
    <label>Descripcion: {{isset($descripcion)?$descripcion:null}}</label> <br>

    <hr>

    <div class="col-sm-8">
    <p class="h5">Información de Contacto</p>
    <br>
      <label>Nombre del Contacto: {{isset($nombre)?$nombre:null}}</label>
      <br>
      <label>Celular: {{isset($celular)?$celular:null}}</label>
      <br>
      <label>Email: {{isset($email)?$email:null}}</label>
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
