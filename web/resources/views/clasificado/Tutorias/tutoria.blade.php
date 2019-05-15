
<div class="container">
    <div class="row">
            <div class="card shadow card-cascade ">
                <div class="card-body d-flex">
                    <div class="col-md-8 px-3">
                        <h5 class="card-title">{{$tutoria->titulo}}</h5>
                        <p class="card-text">Costo: {{$tutoria->costo}}</p>
                        <p class="card-text">Descripcion: {{$tutoria->descripcion}}</p>
                        @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'ver detalles','id_modal'=>'anu'.$id,'title'=>'DETALLES DE LA TUTORÍA','vista'=>'clasificado.Tutorias.detalle'])
                   
                    </div>
                    <div class="text-right view view-cascade overlay"  width="400px">
                        <img class="card-img-top" src="/imagenes/clasificado/tutorias/{{isset($imagen)?$imagen:null}}" 
                        class="pull-left img-responsive thumb margin10 img-thumbnail rounded">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                    </div>
                </div>
            </div>
    </div>
</div>







