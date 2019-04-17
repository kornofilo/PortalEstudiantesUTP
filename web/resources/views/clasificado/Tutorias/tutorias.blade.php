@extends('layouts.app')
@section('content')
<div class="container">
  @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Agregar Tutoría','id_modal'=>'mod1','title'=>'AGREGA TUTORIAS AQUI','vista'=>'clasificado.Tutorias.formulario'])
 <br><br>
  <form class="form-inline">
        <i class="fas fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
  </form>

  @if(count($errors) > 0)
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
        <div id="tutorias" class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4> Tutorias Disponibles</h4></div>
                 @isset($datos)
                     @foreach ($datos as $data)

                     <div class="col-md-10 blogShort card m-3 p-5">

                            @include('clasificado.Tutorias.tutoria', $data)
                    </div>
                     @endforeach
                 @endisset


                    <div class="col-md-12 gap10"></div>
                </div>
            </div>


        </div>

</div>

@endsection
