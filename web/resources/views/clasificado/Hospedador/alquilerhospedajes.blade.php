@extends('layouts.app')
@section('content')
<div class="container">
     
        @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Agregar Anuncio','id_modal'=>'mod1','title'=>'AGREGA TU ANUNCIO','vista'=>'clasificado.Hospedador.formulario'])
        <br>
        <form action="{{route('alquilerhospedajes.search')}}" method="get" class="form-inline">
            <i class="fas fa-search" aria-hidden="true"></i>
            <input class="form-control form-control-sm ml-3 w-75" type="search" placeholder="Search" aria-label="Search"
            name="search" >
            <div class="form-group">
                <button type="submit" class="btn btn-success">Buscar</button>
            </div>
            
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
        <div id="hospedores" class="row justify-content-center">
            <div class="col-md-8"> 
                <div class="card">
                    <div class="card-header"><h4>Alquileres y Hospedajes</h4></div>         
                 @isset($datos)
                     @foreach ($datos as $alquilerhosp)                     
                                                 
                                @include('clasificado.Hospedador.alquilerhospedaje', $alquilerhosp)
                       
                     @endforeach
                 @endisset
                    
                    
                    <div class="col-md-12 gap10"></div>
                </div>
            </div>
            

        </div>
       
</div>

@endsection
