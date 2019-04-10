@extends('layouts.app')
@section('content')
<div class="container">
  @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Agregar Anuncios','id_modal'=>'mod1','title'=>'AGREGA TU ANUNCIO AQUI','vista'=>'clasificado.Anuncios.formulario'])
  <br><br>
  @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Agregar UNA Publicacion','id_modal'=>'mod2','title'=>'AGREGA TU publicacion AQUI','vista'=>'clasificado.Anuncios.agregar'])

  <form class="form-inline">
      <i class="fas fa-search" aria-hidden="true"></i>
      <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
  </form>
      <br >
        <div id="anuncios" class="row justify-content-center">
            <div class="col-md-8"> 
                <div class="card">
                    <div class="card-header">Ofertas Compra/Ventas</div>         
            
                    <div class="col-md-10 blogShort">
                            @include('clasificado.Anuncios.anuncio', $data=['title'=>'ANUNCIO 1','imagen'=>'LOL','descrip'=>'Descripcion del Anucio'])

                    </div>
                    
                    <div class="col-md-12 gap10"></div>
                </div>
            </div>
            

        </div>
        <a  class="btn btn-success" href="{{route('anuncios.create')}}">Crear Anuncio</a>
       
</div>







@endsection

