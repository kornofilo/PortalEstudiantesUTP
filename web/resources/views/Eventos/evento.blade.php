
<div class="container">
    <div class="row">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded card ">
                <div class="card-body d-flex ">
                    <div class="col-md-8 px-3 ">
                        <h3 class="card-title ">{{$evento->titulo}}</h3>
                        <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$evento->lugar}}</p>
                            <p class="card-text"><i class="fas fa-calendar-alt"></i> {{strftime("%d-%m-%Y",strtotime($evento->fecha))}}</p>
                            <p class="card-text"><i class="fas fa-hourglass"></i> {{\Carbon\Carbon::parse($evento->fecha)->diffForHumans()}}</p>
                            <p class="card-text"><i class="fas fa-clock"></i> Publicado {{$evento->created_at->diffForHumans()}}</p>                   
                        @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Ver Detalles del Evento','id_modal'=>'anun'.$id,'title'=>'Detalle del evento','vista'=>'Eventos.detalle'])
                    </div>
                    <div class="text-right view view-cascade overlay"  width="500px">
                        <img class="card-img-top shadow" src="/imagenes/eventos/{{$evento->imagen}}"
                        class="pull-left img-responsive img-thumbnail rounded">
                         <!-- Si el costo del evento es de 0$, mostramos el mensaje 'Gratuito' -->
                         @if ($evento->costo == '0' )
                            <h5 class="card-center text-success font-weight-bold text-right"> {{$evento->costo = "Gratuito"}}</h5>
                          @else
                            <h5 class="card-center text-success font-weight-bold text-right">Admisión: ${{$evento->costo}}</h5>
                          @endif
                    </div>
                </div>
            </div>
    </div>
</div>
