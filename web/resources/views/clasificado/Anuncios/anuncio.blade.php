<div class="col-md-10 blogShort">               
        <h4>{{isset($nombreArt)?$nombreArt:null}}</h4>
        <img src="{{isset($imagen)?$imagen:null}}"  class="pull-left img-responsive thumb margin10 img-thumbnail">
        
        <article><p>
          <label>Precio: {{$anuncio->precio}}</label>
          <br> 
          <label>Descripción: {{$anuncio->descripcion}}</label>  
            </p></article>
          @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'ver detalles','id_modal'=>'anun'.$id,'title'=>'DETALLES DEL ANUNCIO ','vista'=>'clasificado.Anuncios.detalle'])
  
</div>