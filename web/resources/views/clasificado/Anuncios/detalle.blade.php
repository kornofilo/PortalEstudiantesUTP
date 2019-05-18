<div class="card-body" >
  <h2 class="h2-responsive text-center"><strong>{{$anuncio->categoria}}</strong></h2> <br>
      <div class="text-center">
        <img style="max-height: 500px; max-width: 500px;" class="img-thumbnail shadow" src="/imagenes/clasificados/anuncios/{{$anuncio->imagen}}">
        <br><br>
        <h4 class="h4-responsive text-success"><strong>${{$anuncio->precio}}</h5></strong></h4>
      
      </div>
  
  
      
      <h6 class="h6-responsive"><i class="fas class=fas fa-heart" style="font-size:20px;"></i>  Estado: {{$anuncio->estado}}</h6>
      <h6 class="h6-responsive"><i class="fab fa-product-hunt" style="font-size:20px;"></i>  Articulo:  {{$anuncio->nombreArt}}</h6>
      <h6 class="h6-responsive"><i class="fas fa-info" style="font-size:20px;"></i>  Descripción:       {{$anuncio->descripcion}}</h6>
      <hr>
  
  <!--Accordion wrapper-->
  <div class="accordion md-accordion shadow" id="accordionEx" role="tablist" >
    <!-- Accordion card -->
  
      <!-- Card header -->
      <div class="card-header bg-info " role="tab" id="headingOne1">
        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapscard" aria-expanded="true"
          aria-controls="collapsecard">
          <h6 class="mb-0 text-white ">
            <i class=" fas fa-angle-down rotate-icon"></i> Información de Contacto 
          </h6>
        </a>
      </div>
   
      <!-- Card body -->
      <div id="collapscard" class="collapse show thumb-shadow" role="tabpanel" aria-labelledby="headingOne1"
        data-parent="#accordionEx">
        <div class="col-xs-12 col-lg-12 text-justify">
            <div class="card-body" >
          <label><i class="far fa-id-badge"></i>  Nombre del Contacto: {{$anuncio->nombre}}</label>
          <br>
          <label><i class="far fa-id-card"></i>  Celular: {{$anuncio->celular}}</label>
          <br>
          <label><i class="fas fa-at"></i>  Email: {{$anuncio->email}}</label>
          
          <form action="{{route('perfil.verPerfil', $anuncio->email)}}" method="get">
            <button type="submit" class="btn btn-info">
              Ver perfil del tutorias
            </button>       
          </form>
  
    
        </div>
        </div>
      </div>
    </div>
    <!-- Accordion card -->
  
    <hr>
  
        <p class="h5 bold-text">Información del contacto</p>
        <p><i class="fas fa-ticket-alt"></i> Código de Publicación: {{$anuncio->codigoPost}}</p> 
        <p><i class="fas fa-clock"></i> Publicado {{$anuncio->created_at->diffForHumans()}}</p> 
      
  <div class="modal-footer">
      <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
  </div>
  </div>
  