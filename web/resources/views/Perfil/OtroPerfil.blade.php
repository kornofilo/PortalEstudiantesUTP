@extends('layouts.app')

@section('content')
<div class="text-center">
@if($cliente->imagen === "default_avatar.png")
    <img src="{{$cliente->imagen}}" class="rounded" width="200">
@else
    <img src="/imagenes/profileImages/{{$cliente->email}}/{{$cliente->imagen}}" class="rounded" width="200">
@endif
</div><br></br>
<div class="card text-center mx-auto col-sm8 col-md8 col-lg6 col-xl-6">
  <div class="card-header font-weight-bold">
    Perfil
  </div>
  <div class="card-body">
    <h5 class="card-title">Usuario : {{$cliente->nombre}} {{$cliente->apellido}}</h5>
    <p class="card-text">  <li>Correo: {{$cliente->email}}

      <li>Sede: {{$cliente->sede}}</li>

      <li>Carrera: {{$cliente->carrera}}</li>

      <li>Facultad: {{$cliente->facultad}}</li>

      <li>Estado del Usuario: {{$cliente->estado}}</li></p>
    <a class="btn btn-outline-danger" href="{{ URL::previous() }}"> {{ __('Regresar') }}</a>
  </div>
</div>





  <br></br>



 <br><br>



@endsection
