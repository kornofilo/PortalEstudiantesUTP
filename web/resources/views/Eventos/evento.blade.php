
  <div class="container">
        <!-- Card -->
        <div class="card card-cascade wider reverse my-2">
        
            <!-- Card image -->
            <div class="card-block card-cascade wider reverse text-center ">
        <div class="view overlay">
                <img class="card-img-top" style="max-width: 350px;" src="/imagenes/eventos/{{$evento->imagen}}" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
        </div>
             
            <!-- Card content -->
            <div class="card-body card-body-cascade shadow text-center " >
              <!-- Title -->
              <h4 class="card-title"><strong>{{$evento->titulo}}</strong></h4>
              <!-- Subtitle -->
              <h6 class="font-weight-bold indigo-text py-2">Lugar: {{$evento->Lugar}}</h6>
              <!-- Text -->
              <p class="card-text">Descripcion: {{$evento->Descripcion}}
                
               @if ($evento->costo == '0' )
               <p class="card-text">{{$evento->costo = "Gratuito"}}
               @else
               <p class="card-text">Costo: {{$evento->costo}}
               @endif
                  
              </p>
              @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'ver detalles','id_modal'=>'anun'.$id,'title'=>'Detalle del evento','vista'=>'Eventos.detalle'])
            </div>
          
          </div>
          <!-- Card -->
        </div>
        </div>
        
        


