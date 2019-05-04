  <!-- datalle d bolsa de trabajo -->
<div class="form-group row">
<div class="col-sm-8">

    <h4>{{isset($titulo)?$titulo:null}}</h4>
    <div class="container">
      <div class="row ">
          
      <div class="text-left">
   
    <br>
    <label>Tipo de Puesto: {{isset($tipopuesto)?$tipopuesto:null}}</label>
    <br>
    <label>Ubicacion: {{isset($ubicacion)?$ubicacion:null}}</label>
    <br>
    <label>Descripcion: {{isset($descripcion)?$descripcion:null}}</label>
  </div>

  <div >
    <img style=" width: 300px; " src="/imagenes/bolsatrabajo/{{isset($imagen)?$imagen:null}}" 
     class="rounded float-right img-responsive thumb margin10 img-thumbnail">
  </div>
  </div>
</div>
    <hr>
    <div class="col-sm-8">
    <p class="h5">Información de Contacto</p>
    <br>
      <label>Nombre del Contacto: {{isset($nombcont)?$nombcont:null}}</label>
      <br>
      <label>Celular: {{isset($celular)?$celular:null}}</label>
      <br>
      <label>Email: {{isset($emailcont)?$emailcont:null}}</label>

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
