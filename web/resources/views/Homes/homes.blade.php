@extends('layouts.app')

@section('title','Portal Estudiantil - Página Principal')

@section('content')

<!-- Incluimos el carousel -->
@include('Homes.carousel')

<div class="container">    
    
    <!-- Back to top -->        
    @include('Homes.BacktoTop')

@isset($datosE)
    @if($datosE->count() > 0)
        <div class="justify-content-center">
        <!-- Sección con los últomos 4 eventos publicados -->   
            <div id="evento">
                <h1 class="text-center rounded-pill bg-dark text-white">Próximos Eventos</h1>
                <div class="col-xs-12 col-lg-12">
                   
                    <div class="card-deck">
                        @foreach ($datosE  as $evento)                    
                        <div class="card">
                            <img src="/imagenes/eventos/{{$evento->imagen}}" class="card-img-top shadow img-fluid img-thumbnail" alt="..." style="height: 200px; max-width: 400px">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{$evento->titulo}}</h5>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$evento->lugar}}</p>
                                <p class="card-text"><i class="fas fa-calendar-alt"></i> {{strftime("%d-%m-%Y",strtotime($evento->fecha))}} a las {{date("g:ia", strtotime($evento->hora))}} </p>
                                <p class="card-text"><i class="fas fa-hourglass"></i> {{\Carbon\Carbon::parse($evento->fecha)->diffForHumans()}}</p>
                                <!-- Si el costo del evento es de 0$, mostramos el mensaje 'Gratuito' -->
                                @if ($evento->costo == '0' )
                                    <h5 class="card-center text-success font-weight-bold text-right"> {{$evento->costo = "Gratuito"}}</h5>
                                @else
                                    <h5 class="card-center text-success font-weight-bold text-right">Admisión: ${{$evento->costo}}</h5>
                                @endif
                            </div>
                            @include('clasificado.Anuncios.modal', $data=[$evento,'btn_nombre'=>'Ver Detalles','id_modal'=>'evento'.$evento->id,'title'=>'DETALLES DE EVENTO','vista'=>'Eventos.detalle']) 
                        </div>
                        @endforeach                
                    </div>         
                </div>
            </div> 
        </div> <br><br>
    @endif 
@endisset          
                        
@isset($datosB) 
    @if($datosB->count() > 0) 
        <div class="justify-content-center">
            <div id="bolsatrabajo" >
                <h1 class="text-center rounded-pill bg-dark text-white">Nuevas Vacantes</h1>
                <div class=" col-xs-12 col-lg-12  ">
                    <div class="card-deck">
                        @foreach ($datosB  as $bolsatrabajo)                    
                        <div class="card">
                            <img src="/imagenes/bolsatrabajo/{{$bolsatrabajo->imagen}}" class="card-img-top shadow img-fluid img-thumbnail" alt="..." style="height: 200px; max-width: 400px">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{$bolsatrabajo->titulo}}</h5>
                                <p class="card-text"><i class="fas fa-building"></i> {{$bolsatrabajo->empresa}}</p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$bolsatrabajo->ubicacion}}</p>
                                <p class="card-text"><i class="fas fa-file-contract"></i> {{$bolsatrabajo->tipoPuesto}}</p>  
                                <p class="card-text"><i class="fas fa-clock"></i> Publicado {{$bolsatrabajo->created_at->diffForHumans()}}</p>                   
                                <h5 class="card-center text-success font-weight-bold text-right">Salario: ${{$bolsatrabajo->salario}}</h5>
                                @if($bolsatrabajo->urgente === "Sí")
                                    <h5 class="card-center text-danger font-weight-bold text-right">Urgente</h5>
                                @endif
                                </div>
                                @include('clasificado.Anuncios.modal', $data=[$bolsatrabajo,'btn_nombre'=>'Ver Detalles','id_modal'=>'bolsatrabajo'.$bolsatrabajo->id,'title'=>'DETALLE DE BOLSA DE TRABAJO ','vista'=>'Bolsatrabajos.detalle']) 
                            </div>
                        @endforeach 
                    </div>           
                </div>
            </div>
        </div> <br><br>
    @endif
@endisset

@isset($datosC)
    @if($datosC->count() > 0) 
        <div class="justify-content-center">
            <div id="compraventa" >
                <h1 class="text-center rounded-pill bg-dark text-white">Artículos Recientes</h1>
                <div class=" col-xs-12 col-lg-12"> <br>
                    <div class="card-deck">
                    @foreach ($datosC  as $anuncio)                    
                        <div class="card">                                
                            <img src="/imagenes/clasificados/anuncios/{{$anuncio->imagen}}" class="card-img-top  shadow img-fluid img-thumbnail" alt="..." style="height: 200px; max-width: 400px">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{$anuncio->nombreArt}}</h5>
                                <p class="card-text"><i class="fas fa-exchange-alt"></i> {{$anuncio->categoria}}</p>
                                <p class="card-text"><i class="fas fa-heart"></i> {{$anuncio->estado}}</p>
                                <p class="card-text"><i class="fas fa-clock"></i> Publicado {{$anuncio->created_at->diffForHumans()}}</p>                   
                                <h5 class="card-center text-success font-weight-bold text-right">Precio: ${{$anuncio->precio}}</h5>
                            </div>
                            @include('clasificado.Anuncios.modal', $data=[$anuncio,'btn_nombre'=>'Ver Detalles','id_modal'=>'anuncio'.$anuncio->id,'title'=>'DETALLES DE COMPRA/VENTA','vista'=>'clasificado.Anuncios.detalle']) 
                        </div>
                    @endforeach            
                    </div>                
                 </div>
            </div>
        </div><br><br>
    @endif
@endisset

@isset($datosT)
    @if($datosT->count() > 0) 
        <div class="justify-content-center">
          <div id="tutorias" >
            <h1 class="text-center rounded-pill bg-dark text-white">Nuevas tutorías</h1>
            <div class=" col-xs-12 col-lg-12">                     
                <div class="card-deck">
                    @foreach ($datosT  as $tutoria)                    
                        <div class="card">
                            <img src="/imagenes/clasificados/tutorias/{{$tutoria->imagen}}" class="card-img-top shadow img-fluid img-thumbnail" alt="..." style="height: 200px; max-width: 400px">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-break">{{$tutoria->titulo}}</h5>
                                <p class="card-text"><i class="fas fa-book-open"></i> {{$tutoria->materia}}</p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$tutoria->ubicacion}}</p>
                                <p class="card-text"><i class="fas fa-clock"></i> Publicado {{$tutoria->created_at->diffForHumans()}}</p>                   
                                <h5 class="card-center text-success font-weight-bold text-right">${{$tutoria->costo}}/Hora</h5>
                            </div>
                            @include('clasificado.Anuncios.modal', $data=[$tutoria,'btn_nombre'=>'Ver Detalles','id_modal'=>'tutoria'.$tutoria->id,'title'=>'DETALLES DE LA TUTORÍA','vista'=>'clasificado.Tutorias.detalle']) 
                        </div>
                    @endforeach            
                </div>
            </div>
        </div>
     </div><br><br>
    @endif
@endisset
     
@isset($datosH)
    @if($datosH->count() > 0) 
        <div class="justify-content-center">
            <div id="alquilerhospedaje" >
                <div class=" col-xs-12 col-lg-12">
                    <h1 class="text-center rounded-pill bg-dark text-white">Nuevos Alquileres</h1>
                    <div class="card-deck">
                        @foreach ($datosH  as $alquilerhosp)                    
                            <div class="card">                                    
                                <img src="/imagenes/clasificados/hospedador/{{$alquilerhosp->imagen}}" class="card-img-top shadow img-fluid img-thumbnail " alt="..." style="height: 200px; max-width: 400px">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">{{$alquilerhosp->titulo}}</h5>
                                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$alquilerhosp->ubicacion}}</p>
                                    <p class="card-text">
                                        @if($alquilerhosp->estacionamiento === "Sí")
                                            <i class="fas fa-parking"></i>
                                        @endif
                                        @if($alquilerhosp->amueblado === "Sí")
                                            <i class="fas fa-couch"></i>
                                        @endif
                                    </p>
                                    <p class="card-text"> {{$alquilerhosp->habitaciones}} <i class="fas fa-bed"></i> </p>
                                    <p class="card-text"> {{$alquilerhosp->baños}} <i class="fas fa-toilet"></i> </p>
                                    <p class="card-text"><i class="fas fa-clock"></i> Publicado {{$alquilerhosp->created_at->diffForHumans()}}</p>                   
                                    <h5 class="card-center text-success font-weight-bold text-right">${{$alquilerhosp->precio}}/Mes</h5>
                                </div>
                                @include('clasificado.Anuncios.modal', $data=[$alquilerhosp,'btn_nombre'=>'Ver Detalles','id_modal'=>'alquiler'.$alquilerhosp->id,'title'=>'DETALLE ALQUILER/HOSPEDAJE ','vista'=>'clasificado.Hospedador.detalle']) 
                            </div>
                        @endforeach  
                    </div>
                </div>
            </div>
        </div> <br>
    @endif
@endisset

</div>

@endsection
