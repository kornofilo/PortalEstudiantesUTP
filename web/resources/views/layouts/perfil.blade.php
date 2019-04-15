</div>
<div class="form-group">
<label for="sede" class="col-form-label text-md-right">{{ __('Sede') }}</label>
<input id="sede" class="form-control" value="{{auth()->user()->sede}}" disabled>
</div>
<div class="form-group">
<label for="facultad" class="col-form-label text-md-right">{{ __('Facultad') }}</label>
<input id="facultad" class="form-control" value="{{auth()->user()->facultad}}" disabled>
</div>

<div class="form-group">
<label for="carrera" class="col-form-label text-md-right">{{ __('Carrera') }}</label>
<input class="form-control" name="carrera" value="{{auth()->user()->carrera}}" disabled>
</select>
</div>
<div class="form-group">
<label for="nombre">{{ __('Nombre') }}</label>
<input class="form-control" id="nombre" name="nombre" value="{{auth()->user()->nombre}}" disabled>
</div>
<div class="form-group">
<label for="apellido">{{ __('Apellido') }}</label>
<input class="form-control" id="apellido" name="apellido" value="{{auth()->user()->apellido}}" disabled>
</div>

<label>{{ __('Sexo') }}</label> <br>
<div class="form-group">
<input class="form-control" value="{{auth()->user()->sexo}}" disabled>
</div>
<div class="form-group">
<label for="email">{{ __('Correo Universitario') }}</label>
<input class="form-control" value="{{auth()->user()->email}}" disabled>
</div>
<div class="form-group">
<label for="password">{{ __('Contraseña') }}</label>
<input type="password" class="form-control" value="*********"disabled>
    </div><br>
