@extends('layouts.app')

@section('content')
<div class="text-center">
@if($userData->imagen === "default_avatar.png")
    <img src="{{$userData->imagen}}" class="rounded" width="200">
@else
    <img src="/imagenes/profileImages/{{$userData->email}}/{{$userData->imagen}}" class="rounded" width="200">
@endif
</div><br></br>
<div class="card text-center mx-auto col-sm8 col-md8 col-lg6 col-xl-6">
  <div class="card-header font-weight-bold">
    Perfil
  </div>
  <div class="card-body">
    <h5 class="card-title">Usuario : {{$userData->nombre}}{{$userData->apellido}}</h5>
    <p class="card-text">  <li>Correo: {{$userData->email}}

      <li>Sede: {{$userData->sede}}</li>

      <li>carrera: {{$userData->carrera}}</li>

      <li>Facultad: {{$userData->facultad}}</li>

      <li>Estado del Usuario: {{$userData->estado}}</li></p>
    <a class="btn btn-secondary" href="{{ URL::previous() }}"> {{ __('Regresar') }}</a>
  </div>
</div>





  <br></br>



 <br><br>



@endsection
