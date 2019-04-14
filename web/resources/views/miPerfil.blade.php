@extends('layouts.app')

@section('content')
<div class="container-fluid h-100 bg-light">
  <ul><a class="btn btn-primary" href="{{ route('miPerfil') }}"> {{ __('Editar Perfil') }}</a></ul>
    <div class="row h-100 justify-content-center align-items-center">
        <form class="col-lg-5">
                 <h3 class="text-center">Mi Perfil</h3><br>

                 <div class="form-group">
                  <img src="{{auth()->user()->imagen}}" class="rounded mx-auto d-block" width="100">
              @include('layouts.perfil')


              @endsection
