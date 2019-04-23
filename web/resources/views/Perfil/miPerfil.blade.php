@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="col-md-12" align="center">
              <img class="img-responsive img-portfolio img-hover" src="{{auth()->user()->imagen}}" width="100">
            </div>
            <div class="row justify-content-md-center">
              {{auth()->user()->nombre}}
              {{auth()->user()->apellido}}
            </div>
            <div class="col-md-12">
              <br >
              <ul class="list-group list-primary">
                <div class="row justify-content-md-center">
              @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'EDITAR PERFIL','id_modal'=>'mod1','title'=>'EDITAR PERFIL','vista'=>'Perfil.formulario'])
                 <br><br>
                  </ul>
              @include('perfil.perfil')


              @endsection
