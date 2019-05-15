<!-- datalle de Evento -->
<div class="form-group row">
<div class="col-sm-8">

  <h4>{{$evento->titulo}}</h4>
  <div class="container">
    <div class="row ">
        
    <div class="text-left">
    <br>

  <br>
  <label>Lugar:{{$evento->lugar}}</label>
  <br>
  <label>Fecha: {{  date("d M Y", strtotime($evento->fecha)) }}</label>
  <br>
  <label>Costo: {{$evento->costo}}</label>
  <br>
  <label>Facultad:{{$evento->facultad_nomb}}</label>
  <br>
  <label>Descripción: {{$evento->descripcion}}</label>

  </div>
  <hr>
  <div >
      <img style=" width: 300px; " src="/imagenes/evento/{{$evento->imagen}}" 
       class=" rounded float-right img-responsive thumb margin10 img-thumbnail" >
      </div>
  </div>
  </div>
      <hr>
  <div class="col-sm-8">
      <label>Código de Publicación: {{$evento->codigoPost}}</label>    
  </div>

</div>
</div>

<div class="modal-footer">
  <button type="submit" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
</div>
