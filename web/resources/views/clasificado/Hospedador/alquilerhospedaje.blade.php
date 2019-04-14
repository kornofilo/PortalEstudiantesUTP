<div class="col-md-10 blogShort">               
        <h4>{{isset($titulo)?$titulo:null}}</h4>
        <img src="{{isset($imagen)?$imagen:null}}"  class="pull-left img-responsive thumb margin10 img-thumbnail">
        
        <article><p>
          <label>Precio: {{isset($precio)?$precio:null}}</label>
          <br> 
          <label>Descripción: {{isset($descripcion)?$descripcion:null}}</label>  
            </p></article>
  @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Alquileres y Hospedajes','id_modal'=>'anun'.$id,'title'=>'DETALLES DEL ANUNCIO ','vista'=>'clasificado.Hospedador.detalle'])
  
</div>