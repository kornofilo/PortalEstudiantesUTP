@extends('layouts.app')
@section('content')
 <!-- Back to top -->        
 @include('Homes.BacktoTop')
 
<!--Jumbotron -->
<div class="jumbotron jumbotron-fluid  ">  
  <div class="container">
    <h1 class="display-4">Sección de Alquiler/Hospedaje</h1>
    <p class="lead">Aquí podras encontral cuartos o apartamentos en alquiler .</p>
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
    
    <form action="{{route('alquilerhospedajes.search')}}" method="get">
      <div class="form-group row justify-content-center">         
        <div class="col-auto">
          <input class="form-control form-control" type="search" placeholder="Buscar Hospedaje" aria-label="Search" name="search" >
        </div>    

        <div class="col-auto">
            <button class="btn btn-success col" type="submit"> <i class="fas fa-search"></i> </button> 
        </div> 
      </div>                      
    </form>  

    <div class="text-center"> 
            @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Agregar Anuncio','id_modal'=>'mod1','title'=>'AGREGA TU ANUNCIO','vista'=>'clasificado.Hospedador.formulario'])
    </div> 
    
     <br>

    <div id="anuncios" class="row justify-content-center">      
        <div class="col-md-8"> 
              @isset($datos)
                  <!-- Paginación de publicaciones -->
                  <div class="pagination justify-content-center">
                      {{ $datos->links() }}       
                  </div>

                  @foreach ($datos as $alquilerhosp)                                     
                    @include('clasificado.Hospedador.alquilerhospedaje', $alquilerhosp)                 
                  @endforeach

                  <!-- Paginación de publicaciones -->
                  <div class="pagination justify-content-center">
                      {{ $datos->links() }}       
                  </div>
              @endisset              
        </div>        
    </div> <br>
       
</div>

@endsection


