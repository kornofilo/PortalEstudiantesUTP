
<form action="{{ route('bolsatrabajos.store')}}" method="POST" enctype="multipart/form-data">
 @csrf

 <!-- Input de  Urgente -->
 <label>Urgente: </label> <br>

 <div class="form-check form-check-inline">
<label class="form-check-label" for="MasculinoRadio">Si</label>
     <input class="form-check-input" type="radio" name="urgente" id="MasculinoRadio" value="Si" required>
 </div>
 <div class="form-check form-check-inline">
    <label class="form-check-label" for="FemeninoRadio">No</label>
     <input class="form-check-input" type="radio" name="urgente" id="FemeninoRadio" value="No" required>

 </div>
 <!-- Input de Titulo -->
        <div class="form-group row">
          <label for="titulo" class="col-form-label col-sm-3">Titulo:</label>
          <div class="col-sm-8">
            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo" required>
          </div>
        </div>

        <!-- Input de Ubicacion -->
              <div class="form-group row">
                <label for="ubicacion" class="col-form-label col-sm-3">Ubicación:</label>
                <div class="col-sm-8">
                  <input type="text" name="ubicacion" id="ubicación" class="form-control" placeholder="Ubicación" required >
                </div>
              </div>

        <!-- Input de Empresa -->
            <div class="form-group row">
              <label for="empresa" class="col-form-label col-sm-3">Empresa:</label>
              <div class="col-sm-8">
                <input type="text" name="empresa" id="empresa" class="form-control" placeholder="Empresa" required>
              </div>
            </div>

            <!-- Input de M -->
                 <div class="form-group row">
                   <label for="tipopuesto" class="col-form-label  col-sm-3 ">Tipo de Puesto:</label>
                   <div class="col-sm-8">
                   <select id="tipopuesto" class="form-control" name="tipopuesto" required>
                       <option>Tiempo Completo</option>
                       <option>Tiempo Parcial</option>
                       <option>Contrato/Temporario</option>
                   </select>
                   </div>
                   @if ($errors->has('sede'))
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('sede') }}</strong>
                       </span>
                   @endif
               </div>
  <hr>
  <p class="h5">Detalles:</p>
               <!-- Input de costo por hora -->
                   <div class="form-group row">
                     <label for="salario" class="col-form-label col-sm-3">Salario Estimado:</label>
                     <div class="col-sm-8">
                       <input type="number" name="salario" id="salario" class="form-control"  min="1" max="99" step="0.01" oninput="validity.valid||(value=)" placeholder="Salario" required>
                     </div>
                   </div>

                   <!-- Input de Direccion -->
                    <div class="form-group row">
                        <label for="direccion" class="col-form-label col-sm-3">Dirección:</label>
                        <div class="col-sm-8">
                        <textarea class="form-control" id="message-text" name="direccion" placeholder="Direccion"></textarea>
                          </div>
                    </div>
                    <!-- Input de Descripcion -->
                     <div class="form-group row">
                         <label for="descripcion" class="col-form-label col-sm-3">Descripción:</label>
                         <div class="col-sm-8">
                         <textarea class="form-control" id="message-text" name="descripcion" placeholder="Descripcion"></textarea>
                           </div>
                     </div>
                     <!-- Input de Habilidades -->
                      <div class="form-group row">
                          <label for="habilidades" class="col-form-label col-sm-3">Habilidades :</label>
                          <div class="col-sm-8">
                          <textarea class="form-control" id="message-text" name="habilidades" placeholder="Habilidades"></textarea>
                            </div>
                      </div>
                      <!-- Input de Beneficios-->
                       <div class="form-group row">
                           <label for="beneficio" class="col-form-label col-sm-3">Beneficios:</label>
                           <div class="col-sm-8">
                           <textarea class="form-control" id="message-text" name="beneficio" placeholder="Beneficios"></textarea>
                             </div>
                       </div>

  <!-- Informacion de Contacto -->
  <hr>
  <p class="h5">Información de Contacto:</p>
  <!-- Input de Nombre del Contacto -->
         <div class="form-group row">
           <label for="nombcont" class="col-form-label col-sm-3">Titulo:</label>
           <div class="col-sm-8">
             <input type="text" name="nombcont" id="nombcont" class="form-control" placeholder="Nombre del Contacto">
           </div>
         </div>
  <!-- Input de Celular -->
  <div class="form-group row">
    <label for="Celular" class="col-form-label col-sm-3">Celular:</label>
    <div class="col-sm-8">
      <input type="text" name="celular" id="celular" class="form-control" placeholder="Celular" >
    </div>
  </div>
  <!-- Input de email -->
  <div class="form-group row">
    <label for="Email" class="col-form-label col-sm-3">Celular:</label>
    <div class="col-sm-8">
      <input type="text" name="emailcont" id="emailcont" class="form-control" placeholder="Email">
    </div>
  </div>

  <!-- Modal Footer -->
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    <button type="submit" class="btn btn-success">Publicar</button>
  </div>
</form>
