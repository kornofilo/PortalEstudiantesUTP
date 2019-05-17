
<div class="form-group row">
  <div class="col-sm-8">
  
      <h4>{{$tutoria->materia}}</h4>
      <img style="height:200px; width: 200px; margin: 40px;" src="/imagenes/clasificados/tutorias/{{$tutoria->imagen}}"   class="card-img-top">
      <br>
      <label>Costo: {{$tutoria->costo}}</label>
      <br>
      <label>Ubicacion: {{$tutoria->ubicacion}}</label>
      <br>
      <label>Descripcion: {{$tutoria->descripcion}}</label>
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
          <input type="hidden" name="code" value="">
          <input type="submit" class="btn-info" value="Ver perfil del tutorial">
        </form>
      </div>
  
      <hr>
      <div class="col-sm-8">
        <label>Código de la Publicación: {{$tutoria->codigoPost}}</label>
      </div>
  
  </div>
  </div>
  
  <div class="modal-footer">
      <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
  </div>
  



