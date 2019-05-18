@extends('layouts.app')

<title>Portal Estudiantil - Perfil de {{$userData->nombre}} {{$userData->apellido}}</title>

@section('content')
<br>
<body> 
    <div class="container">
    @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
        <div class="row">
          <div class="col-md-4">
            <div class="col-md-12 text-center">
           <!-- Si el usuario tiene la imagen de perfil por defecto, la mostramos. -->
           @if($userData->imagen === "default_avatar.png")
            <img class="img-responsive img-portfolio img-hover" src="{{url(auth()->user()->imagen)}}" width="100" height="100">
          <!-- Si el usuario ha cambiado su imagen de perfil, la mostramos. -->
          @else
            <img class="img-responsive img-portfolio img-hover" src="/imagenes/profileImages/{{$userData->email}}/{{$userData->imagen}}" width="100" height="100">
          @endif
            </div> <br>
            <div class="justify-content-center">              
              <h5 class="font-weight-bold text-center rounded-pill pb-2 mb-1 bg-info text-white"> <i class="fas fa-star"></i> {{$userRole}} <i class="fas fa-star"></i> </h5>      
              <h5 class="text-center"><i class="fas fa-user"></i> {{$userData->nombre}}  {{$userData->apellido}}</h5>
              <h5 class="text-center"><i class="fas fa-university"></i> {{$userData->facultad}}</h5>      
              <h5 class="text-center"><i class="fas fa-user-graduate"></i> {{$userData->carrera}}</h5>  
              <h5 class="text-center"><i class="fas fa-inbox"></i> <a href="mailto:{{$userData->email}}">{{$userData->email}}</a> </h5>  
              <!-- Si el perfil que ingresamos es de nuestro usario, mostramos un botón que lleva a la vista de adminsitración de perfilS -->
              @if($userData->email === auth()->user()->email)
                <button type="button" class="btn btn-primary btn-lg btn-block">
                  <a class="text-white" href="{{ url('miPerfil') }}"><i class="fas fa-user-cog"></i> Administrar mi Perfil</a>
                </button>
              @endif  <br>
              @include('perfil.usuarioPublicaciones')

            </div>

       
@endsection
