  </div></div>
  <div class="col-md-9">
  <form class="form-inline">

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
                    <th>Clasificados</th>
                    <tr>
                      <th width = "500px">Nombre del anuncio</th>
                      <th width = "600px">Estado de la publicación</th>
                      <th width = "600px">Acción</th>
                    </tr>
                  </div>
                    @foreach ($datos as $data)
                    <tr>
                      <td>{{$data->nombreArt}}</td>
                      <td>{{$data->estadoPost}}</td>
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

<!--Condición por si no hay anuncios  -->
                @if($datosT->count() === 0)
                @else
                <thead class="thead-light">
<!-- Tabla de Tutorías -->
                <th>Turorías</th>
                <tr>
                  <th width = "500px">Nombre de la tutoría</th>
                  <th width = "600px">Estado de la publicación</th>
                  <th width = "600px">Acción</th>
                </tr>
                @foreach ($datosT as $data)
                      <tr>
                        <td>{{$data->titulo}}</td>
                        <td>{{$data->estadoPost}}</td>
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

                      <!--Condición por si no hay Hospedaje  -->
                                      @if($datosH->count() === 0)
                                      @else
                                      <thead class="thead-light">
                      <!-- Tabla de Tutorías -->
                                      <th>Alquiler / Hospedaje</th>
                                      <tr>
                                        <th width = "500px">Nombre del anuncio</th>
                                        <th width = "600px">Estado de la publicación</th>
                                        <th width = "600px">Acción</th>
                                      </tr>
                                      @foreach ($datosH as $data)
                                            <tr>
                                              <td>{{$data->titulo}}</td>
                                              <td>{{$data->estadoPost}}</td>
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

<!-- Condición para solo mostrar estas tablas al Administrador y Moderador -->
              @if((Auth::user()->roles()->value('name') == "Administrador") || (Auth::user()->roles()->value('name') == "Moderador"))
<!--Condición por si no hay Bolsas de trabajo  -->
              @if($datosB->count() === 0)
              @else
              <thead class="thead-light">
<!-- Tabla de Bolsa de trabajos -->
              <th>Bolsa de trabajo</th>
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

                @endif
<!--Condición por si no hay Eventos  -->
                @if($datosE->count() === 0)
                @else
                <thead class="thead-light">
<!-- Tabla de Eventos -->
                <th>Eventos</th>
                <tr>
                  <th width = "500px">Nombre del Evento</th>
                  <th width = "600px">Fecha de Evento</th>
                  <th width = "600px">Acción</th>
                </tr>
                @foreach ($datosE as $data)
                            <tr>
                              <td>{{$data->titulo}}</td>
                              <td>{{$data->fecha}}</td>
                              <td>
                                <a class="btn btn-outline-info" href="{{route('Perfil.showE',$data->id)}}">Ver</a>
                                <a class="btn btn-outline-warning" href="{{route('Perfil.detallesE',$data->id)}}">Editar</a>
                                <a class="btn btn-outline-danger" href="{{route('dtE',$data->id)}}">Borrar</a>
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
