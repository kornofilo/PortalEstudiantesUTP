<!--Boton modal -->


<button type="button" class="btn {{isset($btn_type)?$btn_type:'btn-primary'}}" data-toggle="modal" data-target="#{{isset($id_modal)?$id_modal:modal1}}">        
      @isset($btn_nombre)
          {{$btn_nombre}}
      @endisset     
</button>


<!-- The Modal -->
<div class="modal fade" id="{{isset($id_modal)?$id_modal:modal1}}" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
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
