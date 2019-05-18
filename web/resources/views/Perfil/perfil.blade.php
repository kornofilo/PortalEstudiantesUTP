  </div></div>
  <div class="col-md-9">

  <div class="col-xl">

      <br><br>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
            <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
            </ul>
            </div>
        @endif
        <div class="container">

              <h3 class="table card-img-top shadow">Mis Publicaciones</h3>

            <div class="card" >
              <!--Condición por si no hay anuncios  -->
                @if(($datos->count() === 0) && ($datosT->count() === 0) && ($datosE->count() === 0) && ($datosT->count() === 0) && ($datosH->count() === 0) && ($datosB->count() === 0) && ($datosE->count() === 0))
                  <div class="alert alert-success" role="alert">
                    <h6 class="text-center font-weight"> No tiene Anuncios</h6>
                  </div>
                @else            
                  <!--  Tabla de compra/venta -->
                  @if($datos->count() > 0)
                    <h5 class="text-center rounded-pill bg-dark text-white card-img-top shadow">Clasificados</h5>
                    <table class="table card-img-top shadow">
                        <tr>
                        <th width = "500px">Nombre del anuncio</th>
                        <th width = "600px">Estado de la publicación</th>
                        <th width = "600px">Acción</th>
                      </tr>
                      @foreach ($datos as $anuncio)
                        <tr>
                          <td>{{$anuncio->nombreArt}}</td>
                          @if ( $anuncio->estadoPost == "Aprobada")
                            <td class="text-success font-weight-bold">{{$anuncio->estadoPost}}</td>
                          @elseif ( $anuncio->estadoPost == "En Moderación")
                            <td class="text-warning font-weight-bold">{{$anuncio->estadoPost}}</td>
                          @elseif ( $anuncio->estadoPost == "Rechazada")
                            <td class="text-danger font-weight-bold">{{$anuncio->estadoPost}}</td>
                          @endif
                          <td>
                            <div class="p-2 bd-highlight">
                              @include('clasificado.Anuncios.modal', $data=[$anuncio,'btn_nombre'=>'Ver','btn_type'=>'btn-outline-info','id_modal'=>'anuncio'.$anuncio->id,'title'=>'Detalles del Anuncio','vista'=>'clasificado.Anuncios.detalle']) 
                              @include('clasificado.Anuncios.modal', $dataU=[$anuncio,'btn_nombre'=>'Editar','btn_type'=>'btn-outline-warning','id_modal'=>'anuncioU'.$anuncio->id,'title'=>'Editar Anuncio de Compra/Venta','vista'=>'clasificado.Anuncios.formularioUpdate']) 

                              <a class="btn btn-outline-danger" href="{{route('dts',$anuncio->id)}}">Borrar</a>
                            </div>
                            <div class="text-right">
                              <p class="card-text" style="font-size: 9px;"><i class="fas fa-clock"></i > Publicado {{$anuncio->created_at->diffForHumans()}}</p>
                            </div>
                          </td>
                        </tr>
                        @endforeach                        
                      </table>
                      <div class="pagination justify-content-center">
                          {{ $datos->links() }}
                      </div>
                    @endif
                @endif

<!--Condición por si no hay anuncios  -->
                @if($datosT->count() === 0)
                @else
                <table class="table card-img-top shadow">
                <thead class="thead-light">
<!-- Tabla de Tutorías -->
                <h5 class="text-center rounded-pill bg-dark text-white">Tutorías</h5>
                <tr>
                  <th width = "500px">Nombre de la tutoría</th>
                  <th width = "600px">Estado de la publicación</th>
                  <th width = "600px">Acción</th>
                </tr>
                @foreach ($datosT as $tutoria)
                      <tr>
                        <td>{{$tutoria->titulo}}</td>

                        @if ( $tutoria->estadoPost == "Aprobada")
                      <td class="text-success font-weight-bold">{{$tutoria->estadoPost}}</td>
                        @endif
                        @if ( $tutoria->estadoPost == "En Moderación")
                      <td class="text-warning font-weight-bold">{{$tutoria->estadoPost}}</td>
                        @endif
                        @if ( $tutoria->estadoPost == "Rechazada")
                      <td class="text-danger font-weight-bold">{{$tutoria->estadoPost}}</td>
                        @endif
                      <td>
                        @include('clasificado.Anuncios.modal', $data=[$tutoria,'btn_nombre'=>'Ver','btn_type'=>'btn-outline-info','id_modal'=>'tutoria'.$tutoria->id,'title'=>'DETALLES DE LA TUTORÍA','vista'=>'clasificado.Tutorias.detalle']) 
                        @include('clasificado.Anuncios.modal', $dataU=[$tutoria,'btn_nombre'=>'Editar','btn_type'=>'btn-outline-warning','id_modal'=>'tutoriaU'.$tutoria->id,'title'=>'Editar Anuncio de Tutoría','vista'=>'clasificado.Tutorias.formularioUpdate']) 
                       <a class="btn btn-outline-danger" href="{{route('dt',$tutoria->id)}}">Borrar</a>
                       <div class="text-right">
                       <p class="card-text" style="font-size: 9px;"><i class="fas fa-clock"></i > Publicado {{$tutoria->created_at->diffForHumans()}}</p>
                       </div>                            </td>
                          </tr>
                        </thead>

                        @endforeach
                        </table>
                        <div class="pagination justify-content-center">
                          {{ $datosT->links() }}
                        </div>
                        @endif

                      </div>

                      <!--Condición por si no hay Hospedaje  -->
                                      @if($datosH->count() > 0)                                      
                                      <table class="table card-img-top shadow">
                                      <thead class="thead-light">
                      <!-- Tabla de Tutorías -->
                                      <h5 class="text-center rounded-pill bg-dark text-white" align="center">Alquiler / Hospedaje</h5>
                                      <tr>
                                        <th width = "500px">Nombre del anuncio</th>
                                        <th width = "600px">Estado de la publicación</th>
                                        <th width = "600px">Acción</th>
                                      </tr>
                                      @foreach ($datosH as $alquilerhosp)
                                            <tr>
                                              <td>{{$alquilerhosp->titulo}}</td>
                                              @if ( $alquilerhosp->estadoPost == "Aprobada")
                                            <td class="text-success font-weight-bold">{{$alquilerhosp->estadoPost}}</td>

                                              @elseif ( $alquilerhosp->estadoPost == "En Moderación")
                                            <td class="text-warning font-weight-bold">{{$alquilerhosp->estadoPost}}</td>

                                              @elseif ( $alquilerhosp->estadoPost == "Rechazada")
                                            <td class="text-danger font-weight-bold">{{$alquilerhosp->estadoPost}}</td>
                                              @endif
                                            <td>
                                             @include('clasificado.Anuncios.modal', $data=[$alquilerhosp,'btn_nombre'=>'Ver','btn_type'=>'btn-outline-info','id_modal'=>'alquiler'.$alquilerhosp->id,'title'=>'DETALLE ALQUILER/HOSPEDAJE ','vista'=>'clasificado.Hospedador.detalle']) 
                                             <a class="btn btn-outline-warning" href="{{route('Perfil.detallesH',$alquilerhosp->id)}}">Editar</a>
                                             <a class="btn btn-outline-danger" href="{{route('dtH',$alquilerhosp->id)}}">Borrar</a>
                                             <div class="text-right">
                                             <p class="card-text" style="font-size: 9px;"><i class="fas fa-clock"></i > Publicado {{$alquilerhosp->created_at->diffForHumans()}}</p>
                                             </div>                                                  </td>
                                                </tr>
                                              </thead>
                                              @endforeach
                                              <div class="pagination justify-content-center">
                                                {{ $datosH->links() }}
                                              </div>
                                              @endif
                                            </div>
                                              </table>
<!-- Condición para solo mostrar estas tablas al Administrador y Moderador -->
              @if((Auth::user()->roles()->value('name') == "Administrador") || (Auth::user()->roles()->value('name') == "Moderador"))
<!--Condición por si no hay Bolsas de trabajo  -->
              @if($datosB->count() === 0)
              @else
              <table class="table card-img-top shadow">
              <thead class="thead-light">
<!-- Tabla de Bolsa de trabajos -->

              <h5 class="text-center rounded-pill bg-dark text-white">Bolsa de trabajo</h5>
              <tr>
                <th width = "500px">Nombre del trabajo</th>
                <th width = "600px">Es de urgencia</th>
                <th width = "600px">Acción</th>
              </tr>
              @foreach ($datosB as $bolsatrabajo)
                            <tr>
                            <td>{{$bolsatrabajo->titulo}}</td>
                            <td>{{$bolsatrabajo->urgente}}</td>
                            <td>
                              @include('clasificado.Anuncios.modal', $data=[$bolsatrabajo,'btn_nombre'=>'Ver','id_modal'=>'bolsatrabajo'.$bolsatrabajo->id,'btn_type'=>'btn-outline-info','title'=>'Detalles de Anuncio de Trabajo','vista'=>'Bolsatrabajos.detalle']) 
                              @include('clasificado.Anuncios.modal', $dataU=[$bolsatrabajo,'btn_nombre'=>'Editar','btn_type'=>'btn-outline-warning','id_modal'=>'bolsaTrabajoU'.$bolsatrabajo->id,'title'=>'Editar Anuncio de Trabajo','vista'=>'Bolsatrabajos.formularioUpdate']) 
                              <a class="btn btn-outline-danger" href="{{route('dtB',$bolsatrabajo->id)}}">Borrar</a>
                              <div class="text-right">
                              <p class="card-text" style="font-size: 9px;"><i class="fas fa-clock"></i > Publicado {{$bolsatrabajo->created_at->diffForHumans()}}</p>
                              </div>                          </td>
                        </tr>
                      @endforeach
                      </table>
                      <div class="pagination justify-content-center">
                        {{ $datosB->links() }}
                      </div>
                @endif
<!--Condición por si no hay Eventos  -->
                @if($datosE->count() === 0)
                @else
                <!-- Tabla de Eventos -->
                <h5 class="text-center rounded-pill bg-dark text-white">Eventos</h5>
                <table class="table card-img-top shadow">                  
                  <tr>
                    <th width = "500px">Nombre del Evento</th>
                    <th width = "600px">Fecha de Evento</th>
                    <th width = "600px">Acción</th>
                  </tr>
                    @foreach ($datosE as $evento)
                      <tr>
                        <td>{{$evento->titulo}}</td>
                        <td>{{strftime("%d-%m-%Y",strtotime($evento->fecha))}} a las {{date("g:ia", strtotime($evento->hora))}} </td>
                        <td>
                          @include('clasificado.Anuncios.modal', $data=[$evento,'btn_nombre'=>'Ver','btn_type'=>'btn-outline-info', 'id_modal'=>'evento'.$evento->id,'title'=>'Detalles del Evento','vista'=>'Eventos.detalle']) 
                          @include('clasificado.Anuncios.modal', $dataU=[$evento,'btn_nombre'=>'Editar','btn_type'=>'btn-outline-warning','id_modal'=>'eventoU'.$evento->id,'title'=>'Editar Evento','vista'=>'Eventos.formularioUpdate']) 
                          <a class="btn btn-outline-danger" href="{{route('dtE',$evento->id)}}">Borrar</a>
                          <div class="text-right">
                            <p class="card-text" style="font-size: 9px;"><i class="fas fa-clock"></i > Publicado {{$evento->created_at->diffForHumans()}}</p>
                          </div>   
                        </td>  
                      </tr>
                      @endforeach
                  </table>
                  @endif
                  <div class="pagination justify-content-center">
                    {{ $datosE->links() }}
                  </div>
             @endif
            <br>
          </div>
          </div>
          </div>
          </div>
