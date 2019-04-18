<div class="col-md-10 blogShort">               
        <h4>{{isset($titulo)?$titulo:null}}</h4>
        <img src="/imagenes/clasificado/alquilerhospedaje/{{isset($imagen)?$imagen:null}}"  class="card-img-top">
        
        <article><p>
          <label>Precio: {{isset($precio)?$precio:null}}</label>
          <br> 
          <label>Descripción: {{isset($descripcion)?$descripcion:null}}</label>  
            </p></article>
  @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'VER MÁS..','id_modal'=>'anun'.$id,'title'=>'ALQUILER/HOSPEDAJE ','vista'=>'clasificado.Hospedador.detalle'])
  
</div>