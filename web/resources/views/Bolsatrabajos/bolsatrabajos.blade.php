@extends('layouts.app')
@section('content')
 <!-- Back to top -->        
 @include('Homes.BacktoTop')

<!--Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Sección de Bolsa de Trabajo</h1>
    <p class="lead">Aquí podrás encontrar oportunidades de empleo con las empresas más prestigiosas de la región.</p>
  </div>
</div>

<div class="container">    
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!-- Formulario de Búsqueda -->
    <form action="{{route('bolsaDeTrabajo.search')}}" method="get">
        <div class="form-group row justify-content-center">         
            <div class="col-auto">
            <input class="form-control form-control" type="search" placeholder="Buscar Vacante" aria-label="Search" name="search" >
            </div>    

            <div class="col-auto">
                <button class="btn btn-success col" type="submit"> <i class="fas fa-search"></i> </button> 
            </div> 
        </div>                      
    </form>  
    
    @if(auth()->check() && ( auth()->user()->hasAnyRole('Administrador') || auth()->user()->hasAnyRole('Moderador') ) )
    <div class="text-center"> 
        @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Agregar Empleo','id_modal'=>'mod1','title'=>'AGREGA EMPLEOS AQUI','vista'=>'Bolsatrabajos.formulario'])
    </div> 
    @endif
  <br>
        <div id="tutorias" class="row justify-content-center">
            <div class="col-md-8"> 
                 <!-- Paginación de publicaciones -->
                 <div class="pagination justify-content-center">
                    {{ $datos->links() }}       
                </div>

                 @isset($datos)
                    @foreach ($datos as $bolsatrabajo)                    
                        @include('Bolsatrabajos.bolsatrabajo', $bolsatrabajo)                    
                    @endforeach

                     <!-- Paginación de publicaciones -->
                    <div class="pagination justify-content-center">
                        {{ $datos->links() }}       
                    </div>
                 @endisset                
            </div>
        </div>

</div>

@endsection
