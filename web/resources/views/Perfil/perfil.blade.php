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
              <tr>
                <th width = "140px"><b>Nombre</b></th>
                <th width = "120px">Estado</th>
                <th width = "10px">Acción</th>
              </tr>
            <div class="card" >
        @if($datos->count() === 0)
              <div class="alert alert-success" role="alert">
                <h6 class="text-center font-weight-bold"> No tiene Publicaciones</h6>
              </div>

                    @else
        @foreach ($datos as $data)
                    <tr>

                      <td>{{$data->nombreArt}}</td>
                      <td>{{$data->estadoPost}}</td>
                      <td>
                        <a class="btn btn-outline-info" href="{{route('Perfil.show',$data->id)}}">Ver</a>
                        <a class="btn btn-outline-warning" href="{{route('Perfil.detalles',$data->id)}}">Editar</a>
                        <a class="btn btn-outline-danger" href="{{route('dt',$data->id)}}">Borrar</a>
                         </form>
                    </td>
                  </tr>
                @endforeach
                @endif
                @if($datosT->count() === 0)

                @else

                @foreach ($datosT as $data)
                            <tr>

                              <td>{{$data->titulo}}</td>
                              <td>{{$data->estadoPost}}</td>
                              <td>

                                 <form action="{{route('destroy',$data->id)}}" method="post">
                                     @csrf
                                     @method('DELETE')
                                     <a class="btn btn-outline-info" href="{{route('Perfil.show2',$data->id)}}">Ver</a>
                                     <a class="btn btn-outline-warning" href="{{route('Perfil.detalles2',$data->id)}}">Editar</a>
                                     <a class="btn btn-outline-danger" href="{{route('dt',$data->id)}}">Borrar</a>
                                 </form>
                            </td>
                          </tr>
                        @endforeach
              </table>

          @endif

              </div>

              </table>
{!! $datos->links() !!}
            <br>
          </div>
        </form>
     </body>
