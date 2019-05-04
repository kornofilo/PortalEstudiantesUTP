<!--Boton modal -->

<!-- Si la sección que me encuentro es eventos o bolsa de trabajo, y mi rol es administrador o moderador. Aparece el botón de creación de publicación -->
@if(((\Request::is('eventos')) || (\Request::is('bolsatrabajos'))) &&
  ((Auth::user()->roles()->value('name') == "Administrador") || (Auth::user()->roles()->value('name') == "Moderador")) )
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{isset($id_modal)?$id_modal:modal1}}">
      @isset($btn_nombre)
          {{$btn_nombre}}
      @endisset
  </button>
@endif

<!-- Si la sección que me encuentro es compra/venta o tutorías o alquiler/hospedaje. Aparece el botón de creación de publicación -->
@if( (\Request::is('clasificado/anuncios')) || (\Request::is('clasificado/tutorias')) || (\Request::is('clasificado/alquilerhospedajes')) || (\Request::is('clasificado/searchT')) 
|| (\Request::is('/')) || (\Request::is('/postsMod')) ) 
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{isset($id_modal)?$id_modal:modal1}}">
      @isset($btn_nombre)
          {{$btn_nombre}}
      @endisset
  </button>
@endif

<!-- The Modal -->
<div class="modal fade" id="{{isset($id_modal)?$id_modal:modal1}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">
                @isset($title)
                    {{$title}}
                @endisset
        </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            @isset($vista)
            <?php $file_name = '' . $vista; ?>
                @include("{$file_name}")
            @endisset

        </div>



      </div>
    </div>
  </div>
