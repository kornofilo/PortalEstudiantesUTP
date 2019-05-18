<div class="card-body" >
    <h2 class="h2-responsive text-center"><strong>{{$evento->titulo}}</strong></h2> <br>
        <div class="text-center">
          <img style="max-height: 500px; max-width: 500px;" class="img-thumbnail shadow" src="/imagenes/eventos/{{$evento->imagen}}">
          <br><br>
          @if ($evento->costo == 0 )
          <h4 class="h4-responsive text-success"><strong>Gratuito</strong></h4>
            @else
            <h4 class="h4-responsive text-success"><strong>Admisión: ${{$evento->costo}}</strong></h4>
            @endif

        </div>


        <h6 class="h6-responsive"><i class="fas fa-calendar-alt" style="font-size:20px;"></i>  Fecha: {{$evento->fecha}}</h6>
        <h6 class="h6-responsive"><i class="fas fa-map-marker-alt" style="font-size:20px;"></i>  Ubicación: {{$evento->lugar}}</h6>
        <h6 class="h6-responsive"><i class="fab fa-product-hunt" style="font-size:20px;"></i>  Facultad:  {{$evento->facultad_nomb}}</h6>
        <h6 class="h6-responsive"><i class="fas fa-info" style="font-size:20px;"></i>  Descripción: {{$evento->descripcion}}</h6>

      <hr>

          <p class="h5 bold-text">Información de la Publicación</p>
          <p><i class="fas fa-user" style="font-size:20px;"></i> Publicado por: <a href="{{route('perfil.verPerfil', $evento->email)}}"> {{$evento->email}}</a> </p>
          <p><i class="fas fa-ticket-alt" style="font-size:20px;"></i> Código de Publicación: {{$evento->codigoPost}}</p>
          <p><i class="fas fa-clock" style="font-size:20px;"></i> Publicado {{$evento->created_at->diffForHumans()}}</p>


    <div class="modal-footer">
        <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
