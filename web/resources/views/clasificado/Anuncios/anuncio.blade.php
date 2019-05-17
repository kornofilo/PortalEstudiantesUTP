
<div class="container">
    <div class="row">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded card ">
                <div class="card-body d-flex ">
                    <div class="col-md-8 px-3 ">
                        <h3 class="card-title  ">{{$anuncio->titulo}}</h3>
                        <h5 class="card-title font-weight-bold">{{$anuncio->nombreArt}}</h5>
                        <p class="card-text"><i class="fas fa-exchange-alt"></i> {{$anuncio->categoria}}</p>
                        <p class="card-text"><i class="fas fa-heart"></i> {{$anuncio->estado}}</p>
                        <p class="card-text"><i class="fas fa-clock"></i> Publicado {{$anuncio->created_at->diffForHumans()}}</p> 
                        @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Ver Detalles','id_modal'=>'anun'.$id,'title'=>'DETALLES DEL ANUNCIO ','vista'=>'clasificado.Anuncios.detalle'])                  
                    </div>
                    <div class="text-right view view-cascade overlay"  width="500px">
                        <img class="card-img-top shadow" src="/imagenes/clasificados/anuncios/{{$anuncio->imagen}}"
                        class="pull-left img-responsive img-thumbnail rounded">
                        <h5 class="card-center text-success font-weight-bold">${{$anuncio->precio}}</h5>
                    </div>
                </div>
            </div>
    </div>
</div>


