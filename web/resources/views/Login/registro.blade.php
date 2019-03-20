@extends('layouts.layout-login')
@section('content')

<h1 class="text-center">Registro</h1>

<div class="  align-items-center  container">
  <form >


    <div class="form-group col-md-4">
      <label for="inputState">Sede</label>
      <select class="custom-select" required>
        <option value="">Open this select menu</option>
      <option>Centro Regional de Azuero</option>
        <option>Bocas del Toro</option>
        <option>Chiriquí</option>
        <option>Coclé</option>
        <option>Colón</option>
        <option>Panamá Oeste</option>
        <option>Veraguas</option>
      </select>

    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Facultad</label>
      <select class="custom-select" required>
        <option value="">Open this select menu</option>
      <option >Civil</option>
      <option >Eléctrica</option>
      <option >Industrial</option>
      <option > Mecánica</option>
      <option>Sistemas Computacionales</option>
      <option >Ciencias y Tecnología</option>
      </select>

    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Carrera</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        //Facultad de Ingeniería Civil
        <option>Licenciatura en Ingeniería Ambiental</option>
        <option>Licenciatura en Ingeniería Civil</option>
        <option>Licenciatura en Ingeniería Geomática</option>
        <option>Licenciatura en Ingeniería Marítima Portuaria</option>
        <option>Licenciatura en Ingeniería Geológica</option>
        <option>Licenciatura en Operaciones Marítimas y Portuarias</option>
        <option>Licenciatura en Dibujo Automatizado</option>
        <option>Licenciatura en Edificaciones</option>
        <option>Licenciatura en Saneamiento y Ambiente</option>
        <option>Licenciatura en Topografía</option>
        //Facultad de Ingeniería Eléctrica
        <option>Licenciatura en Ingeniería Eléctrica y Electrónica</option>
        <option>Licenciatura en Ingeniería Eléctrica</option>
        <option>Licenciatura en Ingeniería Electrónica</option>
        <option>Licenciatura en Ingeniería Electromecánica</option>
        <option>Licenciatura en Ingeniería en Telecomunicaciones</option>
        <option>Licenciatura en Ingeniería Electrónica y Telecomunicaciones</option>
        <option>Licenciatura en Ingeniería de Control y Automatización</option>
        <option>Licenciatura en Electrónica y Sistemas de Comunicación</option>
        <option>Licenciatura en Sistemas Eléctricos y Automatización</option>
        <option>Técnico en Ingeniería con especialización en Autotrónica</option>
        <option>Técnico en Ingeniería con especialización en Electrónica Biomédica</option>
        <option>Técnico en Ingeniería con especialización en Sistemas Eléctricos</option>
        <option>Técnico en Ingeniería con especialización en Telecomunicaciones</option>
        //Facultad de Ingeniería Industrial
        <option>Licenciatura en Ingeniería Industrial</option>
        <option>Licenciatura en Ingeniería Mecánica Industrial</option>
        <option>Licenciatura en Ingeniería Logística y Cadena de Suministro</option>
        <option>Licenciatura en Recursos Humanos y Gestión de la Productividad</option>
        <option>Licenciatura en Mercadeo y Comercio Internacional</option>
        <option>Licenciatura en Mercadeo y Negocios Internacionales</option>
        <option>Licenciatura en Gestión Administrativa</option>
        <option>Licenciatura en Gestión de la Producción Industrial</option>
        <option>Licenciatura en Logística y Transporte Multimodal</option>
        //Facultad de Ingeniería Mecánica
        <option>Licenciatura en Ingeniería Mecánica</option>
        <option>Licenciatura en Ingeniería de Mantenimiento</option>
        <option>Licenciatura en Ingeniería de Energía y Ambiente</option>
        <option>Licenciatura en Ingeniería Naval</option>
        <option>Licenciatura en Ingeniería Aeronáutica</option>
        <option>Licenciatura en Administración de Aviación</option>
        <option>Licenciatura en Administración de Aviación con opción a vuelo</option>
        <option>Licenciatura en Mecánica Automotriz</option>
        <option>Licenciatura en Mecánica Industrial</option>
        <option>Licenciatura en Refrigeración y Aire Acondicionado</option>
        <option>Licenciatura en Soldadura</option>
        <option>Técnico en Despacho de Vuelo</option>
        <option>Técnico en Ingeniería de Mantenimiento de Aeronaves con especialización en Motores y Fuselajes</option>
        //Facultad de Ingeniería de Sistemas Computacionales
        <option>Licenciatura en Ingeniería de Sistemas de Información</option>
        <option>Licenciatura en Ingeniería de Sistemas y Computación</option>
        <option>Licenciatura en Ingenieria de Software</option>
        <option>Licenciatura en Desarrollo de Software</option>
        <option>Licenciatura en Redes Informáticas</option>
        <option>Licenciatura en Informática Aplicada a la Educación</option>
        <option>Técnico en Informática para la Gestión Empresarial</option>
        //Facultad de Ciencias y Tecnología
        <option>Licenciatura en Ingeniería en Alimentos</option>
        <option>Licenciatura en Ingeniería Forestal</option>
        <option>Licenciatura en Comunicación Ejecutiva Bilingüe</option>

      </select>
    </div>

    <div class="form-group col-md-5">
      <label for="inputEmail4">Nombre</label>
      <input type="email" class="form-control" id="inputEmail4" >

    </div>

    <div class="form-group col-md-5">
      <label for="inputEmail4">Apellido</label>
      <input type="email" class="form-control" id="inputEmail4" >
    </div>

    <div class="form-group row">

       <div class="col-sm-1">Sexo</div>
       <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">Masculino</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">Femenino</label>
</div>

   </div>

    <div class="form-group col-md-6">
      <label for="inputAddress">Correo</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="nombre.apellido@utp.ac.pa">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Repetir Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Seleccionar una imagen</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>

</div>

@endsection
