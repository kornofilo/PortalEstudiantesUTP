
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-5">
                <img src="/imagenes/clasificados/tutorias/{{$tutoria->imagen}}" class="card-img-top  
                shadow img-fluid img-thumbnail" alt="..." style="height: 200px; max-width: 400px"/> 
              <!--/.Carousel Wrapper-->
            </div>
            <div class="col-lg-7 text-left">
              <h2 class="h2-responsive product-name">
                <strong>{{$tutoria->materia}}</strong>
              </h2>
              <h4 class="h4-responsive">
                <span class="green-text">
                  <strong>${{$tutoria->costo}}/Hora</h5></strong>
                </span>
               
              </h4>
  
              
              <h6 ><i class="fas fa-map-marker-alt"></i>{{$tutoria->ubicacion}} </h6>
             
          <p class="h5">Información de Contacto</p>
          
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
          
              <!--Accordion wrapper-->
              <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
  
                <!-- Accordion card -->
                <div class="card">
  
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingOne1">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                      aria-controls="collapseOne1">
                      <h6 class="mb-0">
                        DETALLES <i class="fas fa-angle-down rotate-icon"></i>
                      </h6>
                    </a>
                  </div>
  
                  <!-- Card body -->
                  <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                    data-parent="#accordionEx">
                    <div class="card-body">
                        {{$tutoria->descripcion}}
                    </div>
                  </div>
  
                </div>
                <!-- Accordion card -->

  
              </div>
              <!-- Accordion wrapper -->
              <div class="card-body">
                <div class="text-center">
                    <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                  </button>
                </div>
              </div>
            
              <!-- /.Add to Cart -->
            </div>
          </div>
     
     
 

       
         