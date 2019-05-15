  <!-- datalle d bolsa de trabajo -->
<div class="form-group row">
<div class="col-sm-8">

    <h4>{{$bolsatrabajo->titulo}}</h4>
    <div class="container">
      <div class="row ">
          
      <div class="text-left">
   
    <br>
    <label>Tipo de Puesto: {{$bolsatrabajo->tipopuesto}}</label>
    <br>
    <label>Ubicacion: {{$bolsatrabajo->ubicacion}}</label>
    <br>
    <label>Descripcion: {{$bolsatrabajo->descripcion}}</label>
  </div>

  <div >
    <img style=" width: 300px; " src="/imagenes/bolsatrabajo/{{$bolsatrabajo->imagen}}" 
     class="rounded float-right img-responsive thumb margin10 img-thumbnail">
  </div>
  </div>
</div>
    <hr>
    <div class="col-sm-8">
    <p class="h5">Información de Contacto</p>
    <br>
      <label>Nombre del Contacto: {{$bolsatrabajo->nombcont}}</label>
      <br>
      <label>Celular: {{$bolsatrabajo->celular}}</label>
      <br>
      <label>Email: {{$bolsatrabajo->emailcont}}</label>

    </div>

    <hr>
    <div class="col-sm-8">
      <label>Código de Publicación: {{$bolsatrabajo->codigoPost}}</label>    
    </div>

</div>
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
</div>
