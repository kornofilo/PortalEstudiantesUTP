  </div></div>
  <div class="col-md-9">

  <div class="col-xl">
    <i class="fas fa-search" aria-hidden="true"></i>
    <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Buscar" aria-label="Search">
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
            <table class="table ">
              <h3>Mis Publicaciones</h3>

            <div class="card" >
<!--Condición por si no hay anuncios  -->
              @if(($datos->count() === 0) && ($datosT->count() === 0) && ($datosE->count() === 0) && ($datosT->count() === 0) && ($datosH->count() === 0) && ($datosB->count() === 0) && ($datosE->count() === 0))
              <div class="alert alert-success" role="alert">
                <h6 class="text-center font-weight"> No tiene Anuncios</h6>
              </div>
                    @else

                    <thead class="thead-light">

<!--  Tabla de anuncios-->
                  @if($datos->count() === 0)
                  @else
                    <h5 class="text-center rounded-pill bg-dark text-white" align="center">Clasificados</h5class="text-center rounded-pill bg-dark text-white">
                    <tr>
                      <th width = "500px">Nombre del anuncio</th>
                      <th width = "600px">Estado de la publicación</th>
                      <th width = "600px">Acción</th>
                    </tr>
                  </div>
                    @foreach ($datos as $data)
                    <tr>
                      <td>{{$data->nombreArt}}</td>
                      @if ( $data->estadoPost == "Aprobada")
                    <td class="text-success font-weight-bold">{{$data->estadoPost}}</td>

                      @elseif ( $data->estadoPost == "En Moderación")
                    <td class="text-warning font-weight-bold">{{$data->estadoPost}}</td>

                      @elseif ( $data->estadoPost == "Rechazada")
                    <td class="text-danger font-weight-bold">{{$data->estadoPost}}</td>
                      @endif
                      <td>
                        <div class="p-2 bd-highlight">
                        <a class="btn btn-outline-info" href="{{route('Perfil.show',$data->id)}}">Ver</a>
                        <a class="btn btn-outline-warning" href="{{route('Perfil.detalles',$data->id)}}">Editar</a>
                        <a class="btn btn-outline-danger" href="{{route('dts',$data->id)}}">Borrar</a>
                      </div>
                    </td>
                  </tr>
                  </thead>

                @endforeach
                @endif
                @endif
                </table>

<!--Condición por si no hay anuncios  -->
                @if($datosT->count() === 0)
                @else
                <table class="table ">
                <thead class="thead-light">
<!-- Tabla de Tutorías -->                
                <h5 class="text-center rounded-pill bg-dark text-white" align="center">Tutorías</h5>
                <tr>
                  <th width = "500px">Nombre de la tutoría</th>
                  <th width = "600px">Estado de la publicación</th>
                  <th width = "600px">Acción</th>
                </tr>
                @foreach ($datosT as $data)
                      <tr>
                        <td>{{$data->titulo}}</td>

                        @if ( $data->estadoPost == "Aprobada")
                      <td class="text-success font-weight-bold">{{$data->estadoPost}}</td>
                        @endif
                        @if ( $data->estadoPost == "En Moderación")
                      <td class="text-warning font-weight-bold">{{$data->estadoPost}}</td>
                        @endif
                        @if ( $data->estadoPost == "Rechazada")
                      <td class="text-danger font-weight-bold">{{$data->estadoPost}}</td>
                        @endif
                      <td>
                       <a class="btn btn-outline-info" href="{{route('Perfil.show2',$data->id)}}">Ver</a>
                       <a class="btn btn-outline-warning" href="{{route('Perfil.detalles2',$data->id)}}">Editar</a>
                       <a class="btn btn-outline-danger" href="{{route('dt',$data->id)}}">Borrar</a>

                            </td>
                          </tr>
                        </thead>
                        @endforeach
                        @endif
                      </div>
                      </table>

                      <!--Condición por si no hay Hospedaje  -->
                                      @if($datosH->count() === 0)
                                      @else
                                      <table class="table ">
                                      <thead class="thead-light">
                      <!-- Tabla de Tutorías -->
                                      <h5 class="text-center rounded-pill bg-dark text-white" align="center">Alquiler / Hospedaje</h5>
                                      <tr>
                                        <th width = "500px">Nombre del anuncio</th>
                                        <th width = "600px">Estado de la publicación</th>
                                        <th width = "600px">Acción</th>
                                      </tr>
                                      @foreach ($datosH as $data)
                                            <tr>
                                              <td>{{$data->titulo}}</td>
                                              @if ( $data->estadoPost == "Aprobada")
                                            <td class="text-success font-weight-bold">{{$data->estadoPost}}</td>

                                              @elseif ( $data->estadoPost == "En Moderación")
                                            <td class="text-warning font-weight-bold">{{$data->estadoPost}}</td>

                                              @elseif ( $data->estadoPost == "Rechazada")
                                            <td class="text-danger font-weight-bold">{{$data->estadoPost}}</td>
                                              @endif
                                            <td>
                                             <a class="btn btn-outline-info" href="{{route('Perfil.showH',$data->id)}}">Ver</a>
                                             <a class="btn btn-outline-warning" href="{{route('Perfil.detallesH',$data->id)}}">Editar</a>
                                             <a class="btn btn-outline-danger" href="{{route('dtH',$data->id)}}">Borrar</a>

                                                  </td>
                                                </tr>
                                              </thead>
                                              @endforeach
                                              @endif
                                            </div>
                                              </table>
<!-- Condición para solo mostrar estas tablas al Administrador y Moderador -->
              @if((Auth::user()->roles()->value('name') == "Administrador") || (Auth::user()->roles()->value('name') == "Moderador"))
<!--Condición por si no hay Bolsas de trabajo  -->
              @if($datosB->count() === 0)
              @else
              <table class="table ">
              <thead class="thead-light">
<!-- Tabla de Bolsa de trabajos -->

              <h5 class="text-center rounded-pill bg-dark text-white" align="center">Bolsa de trabajo</h5>
              <tr>
                <th width = "500px">Nombre del trabajo</th>
                <th width = "600px">Es de urgencia</th>
                <th width = "600px">Acción</th>
              </tr>
              @foreach ($datosB as $data)
                            <tr>
                            <td>{{$data->titulo}}</td>
                            <td>{{$data->urgente}}</td>
                            <td>
                              <a class="btn btn-outline-info" href="{{route('Perfil.showB',$data->id)}}">Ver</a>
                              <a class="btn btn-outline-warning" href="{{route('Perfil.detallesB',$data->id)}}">Editar</a>
                              <a class="btn btn-outline-danger" href="{{route('dtB',$data->id)}}">Borrar</a>
                          </td>
                        </tr>
                        </thead>

                      @endforeach
                      </table>
                @endif
<!--Condición por si no hay Eventos  -->
                @if($datosE->count() === 0)
                @else
                <table class="table ">
                <thead class="thead-light">
<!-- Tabla de Eventos -->
                <h5 class="text-center rounded-pill bg-dark text-white" align="center">Eventos</h5>
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
                            </td>
                          </tr>
                          </thead>
                        @endforeach
                      </table>
                  @endif
             @endif
            <br>
          </div>
        </form>
     </body>
