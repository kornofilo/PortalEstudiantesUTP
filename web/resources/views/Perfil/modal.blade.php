<!--Boton modal -->

@if( (\Request::is('miPerfil')) )
  <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{isset($id_modal)?$id_modal:modal1}}"><i class="fas fa-user-cog"></i>
      @isset($btn_nombre)
          {{$btn_nombre}}
      @endisset
  </button>
@endif

<!-- The Modal -->
<div class="modal fade" id="{{isset($id_modal)?$id_modal:modal1}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

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
