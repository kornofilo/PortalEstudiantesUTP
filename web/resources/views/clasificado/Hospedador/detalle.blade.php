<div class="card-body" >
    <h2 class="h2-responsive text-center"><strong>{{$alquilerhosp->titulo}}</strong></h2> <br>
        <div class="text-center">
          <img style="max-height: 500px; max-width: 500px;" class="img-thumbnail shadow" src="/imagenes/clasificados/hospedador/{{$alquilerhosp->imagen}}">
          <br><br>
          <h4 class="h4-responsive text-success"><strong>${{$alquilerhosp->precio}}/Mes</h5></strong></h4>
        
        </div>
    
        @if ($alquilerhosp->categoria === "Casa")
        <h5 class="h5-responsive"><i class="fas fa-home" style="font-size:20px;"></i> {{$alquilerhosp->categoria}}</h5>
     @elseif ($alquilerhosp->categoria === "Apartamento")
        <h5 class="h5-responsive"><i class="fas fa-building" style="font-size:20px;"></i></i> {{$alquilerhosp->categoria}}</h5>
     @else
        <h5 class="h5-responsive"><i class="fas fa-bed" style="font-size:20px;"></i> {{$alquilerhosp->categoria}}</h5>
     @endif
        <h6 class="h6-responsive heading"><i class="fas fa-map-marker-alt" style="font-size:20px;"></i> Ubicación:  {{$alquilerhosp->ubicacion}}</h6>
        <h6 class="h6-responsive"><i class="fas fa-info" style="font-size:20px;"></i> Descripción: {{$alquilerhosp->descripcion}}</h6>
        <hr>
    
    <!--Accordion wrapper-->
    <div class="accordion md-accordion shadow" id="accordionEx" role="tablist" >
      <!-- Accordion card -->

    <!-- Card header -->
    <div class="card-header bg-info shadow " role="tab" id="headingOne1">
        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapscard1" aria-expanded="true"
          aria-controls="collapsecard">
          <h6 class="mb-0 text-white ">
            <i class=" fas fa-angle-down rotate-icon"></i> Detalles de {{$alquilerhosp->categoria}} 
          </h6>
        </a>
      </div>
   
      <!-- Card body -->
      <div id="collapscard1" class="collapse show thumb-shadow" role="tabpanel" aria-labelledby="headingOne1"
        data-parent="#accordionEx">
        <div class="col-xs-12 col-lg-12 text-justify">
            <div class="card-body" >
         
          <br>
          <label><i class="far fa-id-card"style="font-size:20px;"></i>  Estacionamiento: {{$alquilerhosp->estacionamiento}}</label>
          <br>
          <label><i class="fas fa-bed"style="font-size:20px;"></i>   habitaciones: {{$alquilerhosp->habitaciones}}</label>
          <br>
          <label><i class="fas fa-toilet"style="font-size:20px;"></i>  baños: {{$alquilerhosp->baños}}</label>
          <br>
          <label> <i class="fas fa-couch"style="font-size:20px;" ></i>  Amueblado: {{$alquilerhosp->amueblado}}</label>
    
        </div>
        </div>
      </div>
      <br>
        <!-- Card header -->
        <div class="card-header bg-info " role="tab" id="headingOne2">
          <a data-toggle="collapse" data-parent="#accordionEx" href="#collapscard2" aria-expanded="true"
            aria-controls="collapsecard">
            <h6 class="mb-0 text-white ">
              <i class=" fas fa-angle-down rotate-icon"></i> Información de Contacto 
            </h6>
          </a>
        </div>
     
        <!-- Card body -->
        <div id="collapscard2" class="collapse show thumb-shadow" role="tabpanel" aria-labelledby="headingOne1"
          data-parent="#accordionEx">
          <div class="col-xs-12 col-lg-12 text-justify">
              <div class="card-body" >
            <label><i class="far fa-id-badge"style="font-size:20px;"></i>  Nombre del Contacto: {{$alquilerhosp->nombre}}</label>
            <br>
            <label><i class="fas fa-mobile"style="font-size:20px;"></i>  Celular: {{$alquilerhosp->celular}}</label>
            <br>
            <label><i class="fas fa-at"style="font-size:20px;"></i>  Email: {{$alquilerhosp->email}}</label>                                  
          </div>
          </div>
        </div>

      </div>
      <!-- Accordion card -->
    
      <hr>
    
          <p class="h5 bold-text">Información de del contacto</p>
          <p><i class="fas fa-user" style="font-size:20px;"></i> Publicado por: <a href="{{route('perfil.verPerfil', $alquilerhosp->email)}}"> {{$alquilerhosp->email}}</a> </p>
          <p><i class="fas fa-ticket-alt"style="font-size:20px;"></i> Código de Publicación: {{$alquilerhosp->codigoPost}}</p> 
          <p><i class="fas fa-clock"style="font-size:20px;"></i> Publicado {{$alquilerhosp->created_at->diffForHumans()}}</p> 
        
    <div class="modal-footer">
        <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
    