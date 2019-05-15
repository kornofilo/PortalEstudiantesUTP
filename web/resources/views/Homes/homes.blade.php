@extends('layouts.app')

@section('title','Portal Estudiantil - Página Principal')

@section('content')
<!-- Incluimos el carousel -->
<div class="container">            
    @include('Homes.carousel')
<br>

<div class="justify-content-center">
    <!-- Sección con los últomos 5 eventos publicados -->'
    @isset($datosE)                    
    <div id="evento" >
            <div class=" col-xs-12 col-lg-12">
                    <h1 class=" text-center">Eventos</h1>
                <div class="card-deck">
                    @foreach ($datosE  as $evento)                    
                    <div class="card">
                        <img src="/imagenes/evento/{{$evento->imagen}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$evento->titulo}}</h5>
                            <p class="card-text">Descripción: {{$evento->descripcion}}</p>
                            <p class="card-text">Ubicación: {{$evento->lugar}}</p>
                        </div>
                        @include('clasificado.Anuncios.modal', $data=[$evento,'btn_nombre'=>'Ver Detalles','id_modal'=>'evento'.$evento->id,'title'=>'DETALLES DE LA TUTORÍA','vista'=>'Eventos.detalle']) 
                    </div>
                    @endforeach                
                </div>         
            </div>
        </div>
    </div>
    @endisset                        

    <br>
    <br>
 <div class="justify-content-center">
        @isset($datosB)  
<div id="bolsatrabajo" >
        <div class=" col-xs-12 col-lg-12  ">
            
                <h1 class=" text-center">Bolsa de Trabajo</h1>
                <div class="card-deck">
                        @foreach ($datosB  as $bolsatrabajo)                    
                        <div class="card">
                            <img src="/imagenes/bolsatrabajo/{{$bolsatrabajo->imagen}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$bolsatrabajo->titulo}}</h5>
                                <p class="card-text">Descripción: {{$bolsatrabajo->descripcion}}</p>
                            </div>
                        </div>
                        @endforeach            
        </div>
    </div>
</div>
@endisset
</div>

        <br><br>
        <h1 class=" text-center">Clasificados</h1>
        <br>

        <div class="justify-content-center">
                @isset($datosC)
        <div id="compraventa" >
            <div class=" col-xs-12 col-lg-12">
                    <div class=" card text-center border-primary mb-3r"><h4> Compra/Venta</h4></div>
                    <br>
                 <div class="card-deck">
                        @foreach ($datosC  as $compraventa)                    
                        <div class="card">
                            <img src="/imagenes/clasificado/compraventa/{{$compraventa->imagen}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$compraventa->titulo}}</h5>
                                <p class="card-text">Descripción: {{$compraventa->descripcion}}</p>
                            </div>
                        </div>
                        @endforeach            
                </div>
                
            </div>
        </div>
        @endisset
    </div>
    <br>
    <div class="justify-content-center">
            @isset($datosT)
              <div id="tutorias" >
                  <div class=" col-xs-12 col-lg-12 ">
                          <div class=" card text-center border-primary mb-3r"><h4> Tutorías</h4></div>
                          <div class="card-deck">
                                @foreach ($datosT  as $tutoria)                    
                                <div class="card">
                                    <img src="/imagenes/clasificado/tutorias/{{$tutoria->imagen}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$tutoria->titulo}}</h5>
                                        <p class="card-text">Descripción: {{$tutoria->descripcion}}</p>
                                    </div>
                                    @include('clasificado.Anuncios.modal', $data=[$tutoria,'btn_nombre'=>'Ver Detalles','id_modal'=>'tutoria'.$tutoria->id,'title'=>'DETALLES DE LA TUTORÍA','vista'=>'clasificado.Tutorias.detalle']) 
                                </div>
                                @endforeach            
                         </div>
                        </div>
                </div>
            @endisset
     </div>
        
     <br>
            <div class="justify-content-center">
                    @isset($datosH)
              <div id="alquilerhospedaje" >
                    <div class=" col-xs-12 col-lg-12">
                        <div class=" card text-center border-primary mb-3r"><h4> Alquiler/Hospedaje</h4></div>
                          <div class="card-deck">
                                @foreach ($datosH  as $alquiler)                    
                                <div class="card">
                                    <img src="/imagenes/clasificado/hospedador/{{$alquiler->imagen}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$alquiler->titulo}}</h5>
                                        <p class="card-text">Descripción: {{$alquiler->descripcion}}</p>
                                    </div>
                                </div>
                                @endforeach  
                        </div>
                    </div>
                </div>
                @endisset
            </div>
  
</div>


@endsection
