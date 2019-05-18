
                    <div id="carouselHome" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <!--Indicadores-->
                          <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselHome" data-slide-to="1"></li>
                          <li data-target="#carouselHome" data-slide-to="2"></li>
                          <li data-target="#carouselHome" data-slide-to="3"></li>
                          <li data-target="#carouselHome" data-slide-to="4"></li>
                        </ol>
                
                         <!--Contenedor de los Slide-->
                        <div class="carousel-inner" role="listbox">

                          <div class="carousel-item active">
                            <a href="{{ url('eventos') }}">
                              <img class="d-block w-100" src="{{asset('imagenes/carousel/carousel-eventos.jpg')}} " alt="Eventos">
                              <div class="carousel-caption d-none d-md-block hidden-xs hidden-sm">
                                  <h5 class="font-weight-bolder">Eventos</h5>
                                  <p class="font-weight-bolder">Aquí encontrarás información de los próximos eventos que se realizarán en la universidad</p>
                              </div>
                            </a>
                           
                          </div>
                
                          <div class="carousel-item">
                            <a href="{{ url('bolsatrabajos') }}">
                              <img class="d-block w-100" src="{{asset('imagenes/carousel/carousel-bolsaTrabajo.jpg')}} " alt="Bolsa de Trabajo">
                              <div class="carousel-caption d-none d-md-block  hidden-xs hidden-sm">
                                  <h5 class="font-weight-bolder">Bolsa de Trabajo</h5>
                                  <p class="font-weight-bolder">Ofertas de empleo</p>
                              </div>
                            </a>                          
                          </div>
                
                          <div class="carousel-item">
                            <a href="{{ url('clasificado/anuncios') }}">
                              <img class="d-block w-100" src="{{asset('imagenes/carousel/carousel-compraVenta.jpg')}} " alt="Compra/Venta">
                              <div class="carousel-caption d-none d-md-block  hidden-xs hidden-sm">
                                  <h5 class="font-weight-bolder">Compra/Venta</h5>
                                  <p class="font-weight-bolder">Encuentra productos interesantes o vende los que ya no necesites</p>
                              </div>
                            </a>
                           
                          </div>

                          <div class="carousel-item">
                            <a href="{{ url('clasificado/tutorias') }}">
                              <img class="d-block w-100" src="{{asset('imagenes/carousel/carousel-tutorias.jpg')}} " alt="Tutorías">
                              <div class="carousel-caption d-none d-md-block  hidden-xs hidden-sm">
                                  <h5 class="font-weight-bolder">Tutorías</h5>
                                  <p class="font-weight-bolder">Aquí puedes encontrar ayuda cuando necesites aprobar o puedes publicar tus propias tutorías</p>
                              </div>
                            </a>                            
                          </div>

                          <div class="carousel-item">
                            <a href="{{ url('clasificado/alquilerhospedajes') }}">
                              <img class="d-block w-100" src="{{asset('imagenes/carousel/carousel-alquilerHospedaje.jpg')}} " alt="Alquiler/Hospedaje">
                              <div class="carousel-caption d-none d-md-block  hidden-xs hidden-sm">
                                  <h5 class="font-weight-bolder">Alquiler/Hospedaje</h5>
                                  <p class="font-weight-bolder">Encuentra cuartos o apartamentos para alquilar o publica los tuyos</p>
                              </div>
                            </a>
                           
                          </div>
                
                        </div>
                            <!--Controladores-->
                        <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Anterios</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Siguiente</span>
                        </a>
                      </div> <br>



