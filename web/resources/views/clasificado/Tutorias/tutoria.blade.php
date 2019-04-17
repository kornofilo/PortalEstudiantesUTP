<div class="col-md-10 blogShort">
        <h4>{{isset($titulo)?$titulo:null}}</h4>
        <img src="/imagenes/clasificado/tutorias/{{isset($imagen)?$imagen:null}}"  class="card-img-top">

        <article><p>
          <label>Costo: {{isset($costo)?$costo:null}}</label>
          <br>
          <label>Descripcion: {{isset($descripcion)?$descripcion:null}}</label>
            </p></article>
  @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'ver detalles','id_modal'=>'anun'.$id,'title'=>'DETALLES DE LA TUTORÍA','vista'=>'clasificado.Tutorias.detalle'])

</div>
