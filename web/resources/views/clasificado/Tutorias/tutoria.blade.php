
<div class="container">
    <div class="row">
            <div class="card shadow card-cascade ">
                <div class="card-body d-flex">
                    <div class="col-md-8 px-3">
                        <h5 class="card-title">{{$tutoria->titulo}}</h5>
                        <p class="card-text">Materia: {{$tutoria->materia}}</p>
                        <p class="card-text">Ubicación: {{$tutoria->ubicacion}}</p>
                        <p class="card-text">Descripcion: {{$tutoria->descripcion}}</p>
                        @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'ver detalles','id_modal'=>'anu'.$id,'title'=>'DETALLES DE LA TUTORÍA','vista'=>'clasificado.Tutorias.detalle'])
                   
                    </div>
                    <div class="text-right view view-cascade overlay  "  width="500px">
                        <img class="card-img-top shadow" src="/imagenes/clasificados/tutorias/{{$tutoria->imagen}}" 
                        class="pull-left img-responsive thumb margin10 img-thumbnail rounded">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                           
                          </a>
                          <br>  
                          <h5 class="card-center text-success">${{$tutoria->costo}}</h5>
                    </div>
                    
                </div>
              
            </div>
    </div>
    
</div>







