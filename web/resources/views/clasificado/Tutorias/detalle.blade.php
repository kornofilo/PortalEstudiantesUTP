<div class="card-body" >
<h2 class="h2-responsive text-center"><strong>{{$tutoria->titulo}}</strong></h2> <br>
    <div class="text-center ">
      <img style="max-height: 500px; max-width: 500px;" class="img-thumbnail shadow " 
      src="/imagenes/clasificados/tutorias/{{$tutoria->imagen}}" alt="zoom">
      
      <br><br>
      <h4 class="h4-responsive text-success"><strong>${{$tutoria->costo}}/Hora</h5></strong></h4>

    </div>



    <h6 class="h6-responsive"><i class="fas fa-chalkboard-teacher" style="font-size:20px;"></i> Tutor: {{$tutoria->nombreTutor}}</h6>
    <h6 class="h6-responsive"><i class="fas fa-heart" style="font-size:20px;"></i> Materia: {{$tutoria->materia}}</h6>
    <h6 class="h6-responsive heading"><i class="fas fa-map-marker-alt" style="font-size:20px;"></i> Ubicación: {{$tutoria->ubicacion}}</h6>
    <h6 class="h6-responsive"><i class="fas fa-info" style="font-size:20px;"></i> Descripción: {{$tutoria->descripcion}}</h6>
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
        <label><i class="far fa-id-badge" style="font-size:20px;"></i>  Nombre del Contacto: {{$tutoria->nombre}}</label>
        <br>
        <label><i class="fas fa-mobile" style="font-size:20px;"></i>  Celular: {{$tutoria->celular}}</label>
        <br>
        <label><i class="fas fa-at" style="font-size:20px;"></i>  Email: {{$tutoria->email}}</label>
      </div>
      </div>
    </div>
  </div>
  <!-- Accordion card -->

  <hr>

      <p class="h5 bold-text">Información del contacto</p>
      <p><i class="fas fa-user" style="font-size:20px;"></i> Publicado por: <a href="{{route('perfil.verPerfil', $tutoria->email)}}"> {{$tutoria->email}}</a> </p>
      <p><i class="fas fa-ticket-alt" style="font-size:20px;"></i> Código de Publicación: {{$tutoria->codigoPost}}</p>
      <p><i class="fas fa-clock" style="font-size:20px;"></i> Publicado {{$tutoria->created_at->diffForHumans()}}</p>

<div class="modal-footer">
    <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
</div>
</div>
