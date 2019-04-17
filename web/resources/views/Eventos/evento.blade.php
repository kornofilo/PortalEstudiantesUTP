<div class="col-md-10 blogShort">
        <h4>{{isset($titulo)?$titulo:null}}</h4>
        <img src="/imagenes/evento/{{isset($imagen)?$imagen:null}}"  class="pull-left img-responsive thumb margin10 img-thumbnail">
        <article><p>
          <label>Descripcion: {{isset($descripcion)?$descripcion:null}}</label>
            </p></article>
  @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'ver detalles','id_modal'=>'anun'.$id,'title'=>'Detalle del evento','vista'=>'Eventos.detalle'])
  <i class="fa fa-clock-o"></i>
</div>
