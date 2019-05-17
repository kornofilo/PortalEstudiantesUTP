<div class="card-body" >
<h2 class="h2-responsive text-center"><strong>{{$tutoria->titulo}}</strong></h2> <br>
    <div class="text-center">
      <img style="max-height: 500px; max-width: 500px;" class="img-thumbnail shadow" src="/imagenes/clasificados/tutorias/{{$tutoria->imagen}}">
      <br><br>
      <h4 class="h4-responsive text-success"><strong>${{$tutoria->costo}}/Hora</h5></strong></h4>
    
    </div>


    
    <h6 class="h6-responsive"><i class="fas fa-exchange-alt" style="font-size:20px;"></i> {{$tutoria->nombreTutor}}</h6>
    <h6 class="h6-responsive"><i class="fas fa-heart" style="font-size:20px;"></i> Estado: {{$tutoria->materia}}</h6>
    <h6 class="h6-responsive heading"><i class="fas fa-map-marker-alt" style="font-size:20px;"></i> {{$tutoria->ubicacion}}</h6>
    <h6 class="h6-responsive"><i class="fas fa-info" style="font-size:20px;"></i> {{$tutoria->descripcion}}</h6>
    <hr>

<!--Accordion wrapper-->
<div class="accordion md-accordion shadow" id="accordionEx" role="tablist" >
  <!-- Accordion card -->
  <div class="card ">
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
        <label><i class="far fa-id-badge"></i>  Nombre del Contacto: {{$tutoria->nombre}}</label>
        <br>
        <label><i class="far fa-id-card"></i>  Celular: {{$tutoria->celular}}</label>
        <br>
        <label><i class="fas fa-at"></i>  Email: {{$tutoria->email}}</label>
        
        <form action="/OtroPerfil" method="get">
          {{csrf_field()}}
          <input type="hidden" name="code" value="">
          <button type="submit" class="btn btn-info">
            Ver perfil del tutorias
          </button>       
        </form>

      </div>
      </div>
      </div>
    </div>
  </div>
  <!-- Accordion card -->

  <hr>

      <p class="h5 bold-text">Información de la Publicación</p>
      <p><i class="fas fa-ticket-alt"></i> Código de Publicación: {{$tutoria->codigoPost}}</p> 
      <p><i class="fas fa-clock"></i> Publicado {{$tutoria->created_at->diffForHumans()}}</p> 
    
<div class="modal-footer">
    <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
</div>
</div>

       
       
       
       
      
              
             
     
 

       
         