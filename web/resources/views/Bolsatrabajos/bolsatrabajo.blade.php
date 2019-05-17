
<div class="container">
    <div class="row">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded card ">
                <div class="card-body d-flex ">
                    <div class="col-md-8 px-3 ">
                        <h3 class="card-title">{{$bolsatrabajo->titulo}}</h3>
                        <p class="card-text"><i class="fas fa-building"></i> {{$bolsatrabajo->empresa}}</p>
                        <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$bolsatrabajo->ubicacion}}</p>   
                        <p class="card-text"><i class="fas fa-file-contract"></i> {{$bolsatrabajo->tipoPuesto}}</p>  
                        <p class="card-text"><i class="fas fa-location-arrow"></i> {{$bolsatrabajo->direccion}}</p>                           
                        <p class="card-text"><i class="fas fa-clock"></i> Publicado {{$bolsatrabajo->created_at->diffForHumans()}}</p>                                           
                        @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Ver más Detalles','id_modal'=>'anun'.$id,'title'=>'Detalle Bolsa de Trabajo','vista'=>'Bolsatrabajos.detalle'])

                    </div>
                    <div class="text-right view view-cascade overlay"  width="500px">
                        <img class="card-img-top shadow" src="/imagenes/bolsatrabajo/{{$bolsatrabajo->imagen}}"
                        class="pull-left img-responsive thumb margin10 img-thumbnail rounded">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                            
                          </a>
                          <br>  
                          <h5 class="card-center text-success font-weight-bold text-right">Salario: ${{$bolsatrabajo->salario}}</h5>
                          @if($bolsatrabajo->urgente === "Sí")
                            <h5 class="card-center text-danger font-weight-bold text-right">Urgente</h5>
                          @endif
                    </div>
                </div>
            </div>
    </div>
</div>