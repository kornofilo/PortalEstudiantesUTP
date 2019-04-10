<!--Boton modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{isset($id_modal)?$id_modal:modal1}}">
    @isset($btn_nombre)
        {{$btn_nombre}}
    @endisset
</button>
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
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <div class="form-group">
            Informacion de Contacto:
            <br><br>
            <label>Nombre de Contacto</label>
            <input type="text" id="nombreContacto" class="form-control validate" >
        </div>
        </div>
  
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Publicar</button>
        </div>
        
      </div>
    </div>
  </div>