<div class="card-body" >
  <h2 class="h2-responsive text-center"><strong>{{$bolsatrabajo->empresa}}</strong></h2> <br>
      <div class="text-center">
        <img style="max-height: 500px; max-width: 500px;" class="img-thumbnail shadow" src="/imagenes/bolsatrabajo/{{$bolsatrabajo->imagen}}">
        <br><br>
      </div>
  
  
      
      <h6 class="h6-responsive"><i class="fas fa-map-marker-alt" style="font-size:20px;"></i>  Ubicación: {{$bolsatrabajo->ubicacion}}</h6>
      <h6 class="h6-responsive"><i class="fab fa-product-hunt" style="font-size:20px;"></i>  Dirección:  {{$bolsatrabajo->direccion}}</h6>
      <h6 class="h6-responsive"><i class="fas fa-file-contract" style="font-size:20px;"></i>  Tipo de Puesto: {{$bolsatrabajo->tipoPuesto}}</h6>
      <hr>
   <!--Accordion wrapper-->
   <div class="accordion md-accordion shadow" id="accordionEx1" role="tablist" >
    <!-- Accordion card -->
  
      <!-- Card header -->
      <div class="card-header bg-info " role="tab" id="headingOne1">
        <a data-toggle="collapse" data-parent="#accordionEx1" href="#collapscard1" aria-expanded="true"
          aria-controls="collapsecard">
          <h6 class="mb-0 text-white ">
            <i class=" fas fa-angle-down rotate-icon"></i> Detalle de la vacante {{$bolsatrabajo->tipoPuesto}}
          </h6>
        </a>
      </div>
   
      <!-- Card body -->
      <div id="collapscard1" class="collapse show thumb-shadow" role="tabpanel" aria-labelledby="headingOne1"
        data-parent="#accordionEx">
        <div class="col-xs-12 col-lg-12 text-justify">
            <div class="card-body" >
                @if($bolsatrabajo->urgente === "Sí")
                <h5 class="card-center text-danger font-weight-bold text-right">Urgente</h5>
           @endif
          <label><i class="fas fa-info" style="font-size:20px;"></i>  Descripción: {{$bolsatrabajo->descripcion}}</label>
          <br>
          <label><i class="fas fa-male" style="font-size:20px;"></i>  Habilidades: {{$bolsatrabajo->habilidades}}</label>
          <br>
          <label><i class="far fa-handshake" style="font-size:20px;"></i>  Beneficios: {{$bolsatrabajo->beneficio}}</label>

          <h5 class="h4-responsive text-success"><strong> Salario: ${{$bolsatrabajo->salario}}/mensual</strong></h5>
        </div>
        </div>
      </div>
    </div>
    <!-- Accordion card -->
  
    <hr>
  <!--Accordion wrapper-->
  <div class="accordion md-accordion shadow" id="accordionEx2" role="tablist" >
    <!-- Accordion card -->
  
      <!-- Card header -->
      <div class="card-header bg-info " role="tab" id="headingOne2">
        <a data-toggle="collapse" data-parent="#accordionEx2" href="#collapscard2" aria-expanded="true"
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
          <label><i class="far fa-id-badge" style="font-size:20px;"></i>  Nombre del Contacto: {{$bolsatrabajo->nombreContacto}}</label>
          <br>
          <label><i class="fas fa-mobile" style="font-size:20px;"></i>  Celular: {{$bolsatrabajo->celular}}</label>
          <br>
          <label><i class="fas fa-at" style="font-size:20px;"></i>  Email: {{$bolsatrabajo->emailContacto}}</label>                      
        </div>
        </div>
      </div>
    </div>
    <!-- Accordion card -->
  
    <hr>
  
        <p class="h5 bold-text">Información del contacto</p>
        <p><i class="fas fa-user" style="font-size:20px;"></i>Publicado por: <a href="{{route('perfil.verPerfil', $bolsatrabajo->email)}}"> {{$bolsatrabajo->email}}</a> </p>
        <p><i class="fas fa-ticket-alt" style="font-size:20px;"></i> Código de Publicación: {{$bolsatrabajo->codigoPost}}</p> 
        <p><i class="fas fa-clock" style="font-size:20px;"></i> Publicado {{$bolsatrabajo->created_at->diffForHumans()}}</p> 
      
  <div class="modal-footer">
      <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
  </div>
  </div>
  