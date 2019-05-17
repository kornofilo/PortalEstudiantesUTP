
        <!--Body-->
        <div class="modal-body">
  
          <div class="row">
            <div class="col-5">
              <img src="/imagenes/clasificados/tutorias/{{$tutoria->imagen}}" class="card-img-top  shadow img-fluid img-thumbnail" alt="..." style="height: 200px; max-width: 400px"/>
            </div>
  
            <div class="col-7">
                <h4>{{$tutoria->materia}}</h4>
                <br>
      <label>Costo: {{$tutoria->costo}}</label>
      <br>
      <label>Ubicacion: {{$tutoria->ubicacion}}</label>
      <br>
      <label>Descripcion: {{$tutoria->descripcion}}</label>
      
      <hr>
      
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
          
      
          <hr>
          <div class="col-sm-8">
            <label>Código de la Publicación: {{$tutoria->codigoPost}}</label>
          </div>
              <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
  
            </div> 
      <!--/.Content-->
    </div>
  </div>


