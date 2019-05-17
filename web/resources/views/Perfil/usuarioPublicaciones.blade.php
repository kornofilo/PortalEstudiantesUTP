</div></div>
  <div class="col-md-8">

  <div class="col-xl">
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
            <!-- Verificamos si el usuario ha creado publicaciones en la plataforma  -->
            @if(($datos->count() === 0) && ($datosT->count() === 0) && ($eventos->count() === 0) && ($datosT->count() === 0) && ($datosH->count() === 0) && ($datosB->count() === 0) && ($datosE->count() === 0))
                <div class="alert alert-info" role="alert">
                    <h6 class="text-center font-weight"> {{$userData->nombre}} no ha publicado anuncios.</h6>
                </div>
            @else
                <h3 class="text-center">
                    Publicaciones de {{$userData->nombre}}</span>
                </h3>
                @if($eventos->count() > 0)
                    <h5 class="text-center rounded-pill bg-dark text-white p-2">
                        <i class="fas fa-calendar-alt"></i> 
                        Eventos
                        <span class="badge badge-light">{{$eventos->count()}}
                    </h5>  

                    <ul class="list-group">
                    @foreach ($eventos as $evento)
                        
                        <li class="list-group-item">
                            <h5>{{$evento->titulo}}</h5>  
                            <div class="text-right">
                                @include('clasificado.Anuncios.modal', $data=[$evento,'btn_nombre'=>'Ver Detalles','id_modal'=>'evento'.$evento->id,'title'=>'DETALLES DE EVENTO','vista'=>'Eventos.detalle'])
                                <p class="card-text"><i class="fas fa-clock"></i> Publicado {{$evento->created_at->diffForHumans()}}</p>                                         
                            </div>
                        </li>
                       
                    @endforeach
                    </ul>
                     <!-- Paginación de publicaciones -->
                     <div class="pagination justify-content-center">
                        {{ $eventos->links() }}       
                    </div>
                                           
                @endif
                
                   

                                     
             @endif
            <br>
          </div>
        </body>