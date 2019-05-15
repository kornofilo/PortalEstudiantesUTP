<div class="container">
    <div class="row">
            <div class="card shadow card-cascade ">
                <div class="card-body d-flex ">
                    <div class="col-md-8 px-3">
                        <h5 class="card-title">{{$alquilerhosp->titulo}}</h5>
                        <p class="card-text">Descripción: {{$alquilerhosp->descripcion}}</p>
                       
                     @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'VER MÁS..','id_modal'=>'anun'.$id,'title'=>'ALQUILER/HOSPEDAJE ','vista'=>'clasificado.Hospedador.detalle'])  
                                 
                    </div>
                    
                    <div class="text-right view view-cascade overlay"  width="400px">
                        <img class="card-img-top" src="/imagenes/clasificado/hospedador/{{$alquilerhosp->imagen}}" 
                        class="pull-left img-responsive thumb margin10 img-thumbnail rounded">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                            <h5 class="card-center text-success">${{$alquilerhosp->precio}}</h5>
                          </a>
                    </div>
                </div>
            </div>
    </div>
</div>


