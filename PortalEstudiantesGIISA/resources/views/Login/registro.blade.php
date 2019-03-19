@extends('layouts.layout')
@section('content')

<h1 class="text-center">Registro</h1>

<div class="  align-items-center  container">
  <form >


    <div class="form-group col-md-4">
      <label for="inputState">Sede</label>
      <select class="custom-select" required>
        <option value="">Open this select menu</option>
      <option value="1">One</option>
      </select>

    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Facultas</label>
      <select class="custom-select" required>
        <option value="">Open this select menu</option>
      <option value="1">One</option>
      </select>

    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Carrera</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    <div class="form-group col-md-5">
      <label for="inputEmail4">Nombre</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="ID / passport">

    </div>

    <div class="form-group col-md-5">
      <label for="inputEmail4">Apellido</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="ID / passport">
    </div>

    <div class="form-group row">
       <div class="col-sm-2">Sexo</div>
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
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>

</div>

@endsection
