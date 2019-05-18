<script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
<form action="{{route('perfil.update')}}" method="POST" enctype="multipart/form-data">
 @csrf
  <!-- Input de nueva imagen de perfil-->
 <div class="col-md-12 d-flex justify-content-center">
    <!-- Si el usuario tiene la imagen de perfil por defecto, la mostramos. -->
    @if(auth()->user()->imagen === "default_avatar.png")
      <img class="img-responsive img-portfolio img-hover" src="{{auth()->user()->imagen}}" width="100" height="100">
    <!-- Si el usuario ha cambiado su imagen de perfil, la mostramos. -->
    @else
      <img class="img-responsive img-portfolio img-hover" src="/imagenes/profileImages/{{auth()->user()->email}}/{{auth()->user()->imagen}}" width="100" height="100">
    @endif
  </div>
  <div class="form-group">
    <label for="imagenPerfil">Nueva Imagen de Perfil</label>
    <input type="file" class="form-control-file" id="imagenPerfil" name="imagenPerfil" accept="image/*">
  </div>
  <!-- Input del Nombre-->
  <div class="form-group row">
    <label for="nombre" class="col-form-label col-sm-3">Nombre:</label>
    <div class="col-sm-8">
      <input class="form-control" id="nombre" name="nombre" value="{{auth()->user()->nombre}}" required>
    </div>
  </div>

  <!-- Input de Fecha y Hora -->
  <div class="form-group row">
    <label for="apellido" class="col-form-label col-sm-3">Apellido:</label>
    <div class="col-sm-8">
      <input class="form-control" id="apellido" name="apellido" value="{{auth()->user()->apellido}}" required>
    </div>
  </div>

  <!-- Input de Sexo -->
  <label>{{ __('Sexo') }}</label> <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="sexo" id="MasculinoRadio" value="Masculino" required
        @if(auth()->user()->sexo === "Masculino")
           checked
        @endif
        >
        <label class="form-check-label" for="MasculinoRadio">Masculino</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="sexo" id="FemeninoRadio" value="Femenino" required
        @if(auth()->user()->sexo === "Femenino")
           checked
        @endif
        >
        <label class="form-check-label" for="FemeninoRadio">Femenino</label>
    </div> <br><br>



  <!-- Select de Sede o Centro Regional -->
  <div class="form-group">
    <label for="sede" class="col-form-label text-md-right">{{ __('Sede o Centro Regional') }}</label>
    <select id="sede" class="form-control" name="sede" required >
        <option  disabled selected>--- Sede o Centro Regional ---</option>
        <option>Azuero</option>
        <option>Bocas del Toro</option>
        <option>Campus Metropolitano</option>
        <option>Chiriquí</option>
        <option>Coclé</option>
        <option>Colón</option>
        <option>Panamá Oeste</option>
        <option>Veraguas</option>
    </select>

    @if ($errors->has('sede'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('sede') }}</strong>
        </span>
    @endif
  </div>


  <div class="form-group">
    <label for="facultad" class="col-form-label text-md-right">{{ __('Facultad') }}</label>
    <select id="facultad" class="form-control" name="facultad" value="{{old('facultad')}}" required>
        <option disabled selected>--- Facultad ---</option>
        @foreach ($facultades as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>

        @if ($errors->has('facultad'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('facultad') }}</strong>
            </span>
        @endif
  </div>

  <div class="form-group">
      <label for="carrera" class="col-form-label text-md-right">{{ __('Carrera') }}</label>
      <select id="carrera" class="form-control" name="carrera" required>
          <option disabled selected>--Carrera--</option>
      </select>
  </div>

    <!-- Input de Correo-->
    <div class="form-group row">
        <label for="correo" class="col-form-label col-sm-3">Correo Institucional:</label>
        <div class="col-sm-8">
          <input class="form-control" name="correo" id="correo" value="{{auth()->user()->email}}" disabled>
        </div>
    </div>

    <!-- Modal Footer -->
    <div class="modal-footer">
      <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      <button type="submit" class="btn btn-warning">Actualizar</button>
    </div>


    <script type="text/javascript">
    $(document).ready(function ()
    {
          //Seteamos en el select de sedes la sede que pertenece el usuario.
          $('#sede').val('{{auth()->user()->sede}}').change();

          $('#facultad').on('change', function(){
              console.log('facultad changed');
               var facultadID = jQuery(this).val();
               if(facultadID)
               {
                  $.ajax({
                     url : 'miPerfil/getcarreras/' +facultadID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                      $('select[name="carrera"]').empty();
                        var carrera = '{{auth()->user()->carrera}}';
                        $.each(data, function(key,value){
                            //comparamos la carrera del usuario con las que se van agregando al select. Si coincide, la seteamos como seleccionada.
                            if(carrera.localeCompare(key) == 0) {
                              $('select[name="carrera"]').append(
                                '<option value="'+ key +'" selected>'+ value +'</option>'
                              );
                            }else{
                              $('select[name="carrera"]').append(
                                '<option value="'+ key +'">'+ value +'</option>'
                              );
                            }
                        });
                     }
                  });
               }else{
                  $('select[name="carrera"]').empty();
               }
            });

            //Seteamos en el select de facultades la facultad que pertenece el usuario.
            $('#facultad').val('{{auth()->user()->facultad}}').trigger('change');

    });

    </script>



</form>
