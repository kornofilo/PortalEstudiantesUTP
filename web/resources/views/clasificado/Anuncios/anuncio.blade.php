
<div class="container">
    <div class="row">
            <div class="card shadow card-cascade ">
                <div class="card-body d-flex">
                    <div class="col-md-8 px-3">
                        <h5 class="card-title">{{$anuncio->titulo}}</h5>
                        
                        <p class="card-text">Descripcion: {{$anuncio->descripcion}}</p>
                        @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'ver detalles','id_modal'=>'anun'.$id,'title'=>'DETALLES DEL ANUNCIO ','vista'=>'clasificado.Anuncios.detalle'])
                   
                    </div>
                    <div class="text-right view view-cascade overlay"  width="500px">
                        <img class="card-img-top shadow" src="/imagenes/clasificado/anuncio/{{$anuncio->imagen}}"
                        class="pull-left img-responsive thumb margin10 img-thumbnail rounded">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                            
                          </a>
                          <br>  
                            <h5 class="card-center text-success">${{$anuncio->precio}}</h5>
                    </div>
                </div>
            </div>
    </div>
</div>


