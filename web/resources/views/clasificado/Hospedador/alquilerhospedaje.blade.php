<div class="container">
        <div class="row">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded card ">
                    <div class="card-body d-flex ">
                        <div class="col-md-8 px-3 ">
                            <h3 class="card-title  ">{{$alquilerhosp->titulo}}</h3>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$alquilerhosp->ubicacion}}</p>
                            <p class="card-text"><i class="fas fa-info"></i> {{$alquilerhosp->descripcion}}</p>
                            <p class="card-text"><i class="fas fa-clock"></i> {{$alquilerhosp->created_at->diffForHumans()}}</p>
                       
                        </div>
                        <div class="text-right view view-cascade overlay"  width="500px">
                            <img class="card-img-top shadow" src="/imagenes/clasificados/hospedador/{{$alquilerhosp->imagen}}" 
                            class="pull-left img-responsive thumb margin10 img-thumbnail rounded">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                                
                              </a>
                              <br>  
                                <h5 class="card-center text-success font-weight-bold">${{$alquilerhosp->precio}}</h5>
                                @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'VER MÁS..','id_modal'=>'anun'.$id,'title'=>'ALQUILER/HOSPEDAJE ','vista'=>'clasificado.Hospedador.detalle'])
    
                        </div>
                    </div>
                </div>
        </div>
    </div>

