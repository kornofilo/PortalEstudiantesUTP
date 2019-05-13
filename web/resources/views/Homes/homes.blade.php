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
                <h4 class="text-center">  Últimos Eventos  </h4> 
                <div class="card-deck">
                    @foreach ($datosE  as $evento)                    
                    <div class="card">
                        <img src="/imagenes/evento/{{$evento->imagen}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$evento->titulo}}</h5>
                            <p class="card-text">Descripción: {{$evento->descripcion}}</p>
                            <p class="card-text">Ubicación: {{$evento->lugar}}</p>
                        </div>
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
<div id="bolsatrabajo" >
        <div class=" col-xs-12 col-lg-12  ">
            
                <div class="card text-center border-primary mb-3r"><h4> Bolsa de Trabajo </h4></div>
             @isset($datosB)
             
                 @foreach ($datosB as $data)
                
                        @include('Bolsatrabajos.bolsatrabajo', $data)
               
                 @endforeach
          
             @endisset
           
            
        </div>
    </div>

</div>

        <br><br>
        <h1 class=" text-center">Clasificados</h1>
        <br>
   <div class=" row justify-content-center">

        <div id="compraventa" >
            <div class=" col-xs-12 col-lg-12">
                <div class="card ">
                    <div class="card-header text-center"><h4> Compra/Venta</h4></div>
                 @isset($datosC)
                 
                     @foreach ($datosC as $data)
                    
                     <div class="col-md-10 card m-4 p-5">

                            @include('Homes.publicaciones', $data)
                    </div>
                     @endforeach
              
                 @endisset
               
                </div>
            </div>
        </div>
  
              <div id="tutorias" >
                  <div class=" col-xs-4 col-lg-4 ">
                      <div class="card ">
                          <div class="card-header text-center"><h4> Tutorías</h4></div>
                       @isset($datosT)
                       
                           @foreach ($datosT as $data)
                          
                                  @include('clasificado.Tutorias.tutoria', $data)
                        
                           @endforeach
                   
                       @endisset
                      </div>
                  </div>
              </div>
              
              <div id="alquilerhospedaje" >
                    <div class=" col-xs-12 col-lg-12">
                        <div class="card ">
                            <div class="card-header"><h4> Alquiler/Hospedaje</h4></div>
                         @isset($datosH)
                         
                             @foreach ($datosH as $data)
                        
                             <div class="col-md-10 card m-4 p-5">
        
                                    @include('Homes.publicaciones', $data)
                            </div>
                             @endforeach
                    
                         @endisset
                         
                        </div>
                    </div>
                </div>

     </div>
</div>


@endsection
