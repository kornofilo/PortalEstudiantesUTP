@extends('layouts.app')
@section('content')
<div class="container">
  @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Agregar Evento','id_modal'=>'mod1','title'=>'AGREGA EVENTOS AQUÍ','vista'=>'Eventos.formulario'])
 <br><br>
  <form class="form-inline">
        <i class="fas fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Buscar" aria-label="Search">
  </form>
  <div class="alert alert-danger">
  <ul>
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
  </ul>
  </div>
  @endif

  <br><br>
  <br >
        <div id="eventos" class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4> Eventos</h4></div>
                 @isset($datos)
                     @foreach ($datos as $data)

                     <div class="col-md-20 blogShort card m-3 p-5">
                            <i class="fa fa-clock-o"></i>
                            @include('Eventos.evento', $data)

                     @endforeach

                 @endisset
                  </div>
                    <div class="col-md-12 gap10"></div>

                </div>
            </div>


        </div>

</div>

@endsection
