@extends('layouts.app')

@section('title','Portal Estudiantil - Administrar mi Perfil')

@section('content')

@include('Homes.BacktoTop')
<br>
    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="col-md-12 text-center">
           <!-- Si el usuario tiene la imagen de perfil por defecto, la mostramos. -->
           @if(auth()->user()->imagen === "default_avatar.png")
           <img class="card-img-top shadow pull-left img-responsive thumb margin5 img-thumbnail rounded" src="{{auth()->user()->imagen}}">
          <!-- Si el usuario ha cambiado su imagen de perfil, la mostramos. -->
          @else
            <img class="img-responsive img-portfolio img-hover" src="/imagenes/profileImages/{{auth()->user()->email}}/{{auth()->user()->imagen}}" width="100" height="100">
          @endif
            </div>
            <br>
            <div class="justify-content-md-center">
              <h5 class="text-center"><i class="fas fa-user"></i> {{auth()->user()->nombre}}   {{auth()->user()->apellido}}</h5>

            </div>
            <div class="col-md-12">
              <br >
              <ul class="list-group list-primary">
                <div class="row justify-content-md-center">
                 <br><br>
                 @include('Perfil.modal', $data=['btn_nombre'=>'EDITAR PERFIL','id_modal'=>'mod1','title'=>'EDITAR PERFIL','vista'=>'Perfil.formulario'])
                  </ul>
              @include('perfil.perfil')


              @endsection
