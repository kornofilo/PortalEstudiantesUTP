<div class="col-md-10 blogShort">               
        <h4>{{$alquilerhosp->titulo}}</h4>
        <img src="/imagenes/clasificado/hospedador/{{$alquilerhosp->imagen}}"  class="card-img-top">
        
        <article><p>
          <label>Precio: {{$alquilerhosp->precio}}</label>
          <br> 
          <label>Descripción: {{$alquilerhosp->descripcion}}</label>  
            </p></article>
          @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'VER MÁS..','id_modal'=>'anun'.$id,'title'=>'ALQUILER/HOSPEDAJE ','vista'=>'clasificado.Hospedador.detalle'])
  
</div>