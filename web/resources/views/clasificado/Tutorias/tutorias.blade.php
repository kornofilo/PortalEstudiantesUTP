@extends('layouts.app')
@section('content')
 <!-- Back to top -->
 @include('Homes.BacktoTop')

<!--Jumbotron -->
<div class="jumbotron jumbotron-fluid  ">
  <div class="container">
    <h1 class="display-4">Sección de Tutorías</h1>
    <p class="lead">Aquí tendrás acceso a tutorías, de diversas materias.</p>
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

    <form action="{{route('tutorias.search')}}" method="get">
      <div class="form-group row justify-content-center">
        <div class="col-auto">
          <input class="form-control form-control" type="search" placeholder="Buscar Tutoría" aria-label="Search" name="search" >
        </div>

        <div class="col-auto">
            <button class="btn btn-success col" type="submit"> <i class="fas fa-search"></i> </button>
        </div>
      </div>
    </form>

    <div class="text-center">
        @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Agregar Tutoría','id_modal'=>'mod1','title'=>'AGREGA TUTORIAS AQUI','vista'=>'clasificado.Tutorias.formulario'])
    </div>

     <br>

    <div id="anuncios" class="row justify-content-center">
        <div class="col-md-8">
              @isset($datos)
                  <!-- Paginación de publicaciones -->
                  <div class="pagination justify-content-center">
                      {{ $datos->links() }}
                  </div>
                  @if($datos->count() > 0)
                    @foreach ($datos as $tutoria)
                      @include('clasificado.Tutorias.tutoria', $tutoria)                 
                    @endforeach
                  @else
                    <div class="alert alert-info text-center" role="alert">
                      No existen anuncios de tutorías publicados en estos momentos.
                    </div>
                  @endif
                  
                  <!-- Paginación de publicaciones -->
                  <div class="pagination justify-content-center">
                      {{ $datos->links() }}
                  </div>
              @endisset
        </div>
    </div> <br>

</div>

@endsection
