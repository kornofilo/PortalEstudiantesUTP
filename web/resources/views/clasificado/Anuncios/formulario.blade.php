       
      <form action="{{ route('anuncios.store')}}" method="POST" enctype="multipart/form-data"> 
       @csrf
       <div class="form-group row">
            <label for="categoria" class="col-form-label col-sm-3">Categoría:</label>
                <div class="col-sm-8">
                 <select id="categoria" class="form-control" name="categoria" required>
                    <option value="Apartamento">Compra/venta</option>
                    <option value="Compra" >Compra</option>
                    <option value="Venta">Venta</option>
                </select>
                </div>
        </div>

        <div class="form-group row">
            <label for="nombreArticulo" class="col-form-label col-sm-3">Nombre del Articulo:</label>
            <div class="col-sm-8">
            <input type="text" name="nombreArt" id="nombreArt" class="form-control" placeholder="Nombre del Articulo" tabindex="1">
            </div>
        </div>
  

        <div class="form-group row">
            <label for="precio" class="col-form-label col-sm-3">Precio:</label>
            <div class="col-sm-8">
            <input type="text" name="precio" id="precio" class="form-control" placeholder="Precio" tabindex="1">
            </div>
        </div>
  
        <div class="form-group row">
            <label for="estado" class="col-form-label col-sm-3">Estado:</label>
                <div class="col-sm-8">
                 <select id="estado" class="form-control" name="estado" required>
                    <option value="estadoo">Nuevo/Usado</option>
                    <option value="Nuevo">Nuevo</option>
                    <option value="Usado">Usado</option>
                </select>
                </div>
        </div>

        <div class="form-group row">
            <label for="descripcion" class="col-form-label col-sm-3">Descripción:</label>
            <div class="col-sm-8">
            <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción"></textarea>
            </div>
        </div>
  
        <!-- Input de Imagen -->
         <div class="form-group row">
            <label for="addfoto" class="col-form-label col-sm-3">Agregar Fotos:</label>
            <div class="col-sm-8">
            <input type="file" name="imagen" id="imagen" class="form-control" placeholder="Add Foto" tabindex="1">
            </div>
        </div> 
        

        <!-- Informacion de Contacto -->
        <hr>
        <p class="h5">Información de Contacto:</p>

        <!-- Input de Celular -->
        <div class="form-group row">
          <label for="Celular" class="col-form-label col-sm-3">Celular:</label>
          <div class="col-sm-8">
            <input type="text" name="celular" id="celular" class="form-control" placeholder="Celular" tabindex="1">
          </div>
        </div>

      
  
        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Publicar</button>
        </div>
      
      </form>