<div class="container">
    <div class="row">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded card ">
                <div class="card-body d-flex ">
                    <div class="col-md-8 px-3 ">
                        <h3 class="card-title  ">{{$tutoria->titulo}}</h3>
                        <h5 class="card-text font-weight-bold"><i class="fas fa-book"></i>{{$tutoria->materia}}</h5>
                        <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$tutoria->ubicacion}}</p>
                        <p class="card-text"><i class="fas fa-info"></i> {{$tutoria->descripcion}}</p>
                        <p class="card-text"><i class="fas fa-clock"></i> {{$tutoria->created_at->diffForHumans()}}</p>
                        @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'ver detalles','id_modal'=>'anu'.$id,'title'=>'DETALLES DE LA TUTORÍA','vista'=>'clasificado.Tutorias.detalle'])
                    </div>
                    <div class="text-right view view-cascade overlay"  width="500px">
                        <img class="card-img-top shadow" src="/imagenes/clasificados/tutorias/{{$tutoria->imagen}}" 
                        class="pull-left img-responsive thumb margin10 img-thumbnail rounded">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                            
                          </a>
                          <br>  
                            <h5 class="card-center text-success font-weight-bold">${{$tutoria->costo}}</h5>
                            

                    </div>
                </div>
            </div>
    </div>
</div>









