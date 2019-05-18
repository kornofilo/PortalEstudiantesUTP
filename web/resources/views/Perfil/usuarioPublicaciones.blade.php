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
            <!-- Verificamos si el usuario ha creado publicaciones en la plataforma  -->
            @if(($eventos->count() === 0) && ($vacantes->count() === 0) && ($anuncios->count() === 0) && ($tutorias->count() === 0) && ($hospedajes->count() === 0))
                <div class="alert alert-info" role="alert">
                    <h6 class="text-center font-weight"> {{$userData->nombre}} no ha publicado anuncios.</h6>
                </div>
            @else
                <h3 class="text-center">
                    Publicaciones de {{$userData->nombre}}</span>
                </h3>
                <!-- Verificamos si el usuario ha publicado eventos -->
                @if($eventos->count() > 0)
                    <h5 class="text-center rounded-pill bg-dark text-white p-2">
                        <i class="fas fa-calendar-alt"></i> 
                        Eventos
                        <i class="fas fa-calendar-alt"></i> 
                    </h5>  

                    <ul class="list-group">
                    @foreach ($eventos as $evento)
                        
                        <li class="list-group-item">
                            <h5>{{$evento->titulo}}</h5> 
                            @include('clasificado.Anuncios.modal', $data=[$evento,'btn_nombre'=>'Ver Detalles','id_modal'=>'evento'.$evento->id,'title'=>'DETALLES DE EVENTO','vista'=>'Eventos.detalle']) 
                            <div class="text-right">
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
                <!-- Verificamos si el usuario ha publicado oportunidades de empleo -->
                @if($vacantes->count() > 0)
                    <h5 class="text-center rounded-pill bg-dark text-white p-2">
                        <i class="fas fa-briefcase"></i>
                            Bolsa de Trabajo
                        <i class="fas fa-briefcase"></i>
                    </h5>  

                    <ul class="list-group">
                    @foreach ($vacantes as $bolsatrabajo)
                        
                        <li class="list-group-item">
                            <h5>{{$bolsatrabajo->titulo}}</h5>  
                            @include('clasificado.Anuncios.modal', $data=[$bolsatrabajo,'btn_nombre'=>'Ver Detalles','id_modal'=>'bolsatrabajo'.$bolsatrabajo->id,'title'=>'DETALLE DE BOLSA DE TRABAJO ','vista'=>'Bolsatrabajos.detalle']) 
                            <div class="text-right">
                                <p class="card-text"><i class="fas fa-clock"></i> Publicado {{$bolsatrabajo->created_at->diffForHumans()}}</p>                                         
                            </div>
                        </li>
                       
                    @endforeach
                    </ul>
                     <!-- Paginación de publicaciones -->
                     <div class="pagination justify-content-center">
                        {{ $vacantes->links() }}       
                    </div>
                                           
                @endif

                <!-- Verificamos si el usuario ha publicado anuncios de compra/venta -->
                @if($anuncios->count() > 0)
                    <h5 class="text-center rounded-pill bg-dark text-white p-2">
                        <i class="fas fa-money-bill-wave"></i>
                            Compra/Venta
                        <i class="fas fa-money-bill-wave"></i>
                    </h5>  

                    <ul class="list-group">
                    @foreach ($anuncios as $anuncio)
                        
                        <li class="list-group-item">
                            <h5>{{$anuncio->nombreArt}}</h5>  
                            @include('clasificado.Anuncios.modal', $data=[$anuncio,'btn_nombre'=>'Ver Detalles','id_modal'=>'alquiler'.$anuncio->id,'title'=>'DETALLES DE COMPRA/VENTA','vista'=>'clasificado.Anuncios.detalle']) 
                            <div class="text-right">
                                <p class="card-text"><i class="fas fa-clock"></i> Publicado {{$anuncio->created_at->diffForHumans()}}</p>                                         
                            </div>
                        </li>
                       
                    @endforeach
                    </ul>
                     <!-- Paginación de publicaciones -->
                     <div class="pagination justify-content-center">
                        {{ $anuncios->links() }}       
                    </div>
                                           
                @endif
                
                 <!-- Verificamos si el usuario ha publicado anuncios de tutorías -->
                 @if($tutorias->count() > 0)
                    <h5 class="text-center rounded-pill bg-dark text-white p-2">
                        <i class="fas fa-chalkboard-teacher"></i>
                            Tutorías
                        <i class="fas fa-chalkboard-teacher"></i>
                    </h5>  

                    <ul class="list-group">
                    @foreach ($tutorias as $tutoria)
                        
                        <li class="list-group-item">
                            <h5>{{$tutoria->titulo}}</h5>  
                            @include('clasificado.Anuncios.modal', $data=[$tutoria,'btn_nombre'=>'Ver Detalles','id_modal'=>'tutoria'.$tutoria->id,'title'=>'DETALLES DE LA TUTORÍA','vista'=>'clasificado.Tutorias.detalle']) 
                            <div class="text-right">
                                <p class="card-text"><i class="fas fa-clock"></i> Publicado {{$tutoria->created_at->diffForHumans()}}</p>                                         
                            </div>
                        </li>
                       
                    @endforeach
                    </ul>
                     <!-- Paginación de publicaciones -->
                     <div class="pagination justify-content-center">
                        {{ $tutorias->links() }}       
                    </div>
                                           
                @endif

                <!-- Verificamos si el usuario ha publicado anuncios de alquiler/hospedaje -->
                @if($hospedajes->count() > 0)
                    <h5 class="text-center rounded-pill bg-dark text-white p-2">
                       <i class="fas fa-home"></i>
                            Alquiler/Hospedaje
                        <i class="fas fa-home"></i>
                    </h5>  

                    <ul class="list-group">
                    @foreach ($hospedajes as $alquilerhosp)
                        
                        <li class="list-group-item">
                            <h5>{{$alquilerhosp->titulo}}</h5>  
                            @include('clasificado.Anuncios.modal', $data=[$alquilerhosp,'btn_nombre'=>'Ver Detalles','id_modal'=>'alquiler'.$alquilerhosp->id,'title'=>'DETALLE ALQUILER/HOSPEDAJE ','vista'=>'clasificado.Hospedador.detalle']) 
                            <div class="text-right">
                                <p class="card-text"><i class="fas fa-clock"></i> Publicado {{$alquilerhosp->created_at->diffForHumans()}}</p>                                         
                            </div>
                        </li>
                       
                    @endforeach
                    </ul>
                     <!-- Paginación de publicaciones -->
                     <div class="pagination justify-content-center">
                        {{ $hospedajes->links() }}       
                    </div>
                                           
                @endif                                                        
             @endif
            <br>
          </div>
        </body>