@extends('layouts.app')

@section('title','Moderación de Publicaciones')

@section('content')
<!-- Información -->
<div class="alert alert-info" role="alert">
    <h6 class="text-center font-weight-bold"> Moderación de Publicaciones </h6>
</div>

<!-- Moderación de Compra/Venta -->
@if($compraVenta->count() === 0)
    <div class="alert alert-success" role="alert">
        <h6 class="text-center font-weight-bold"> No tiene publicaciones de Compra/Venta por Moderar </h6>
    </div>
@else
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
           <h4>Publicaciones de Compra/Venta Por Moderar: <span class="badge badge-primary">{{$compraVenta->count()}}</span> </h4>
        </div>
        <div class="card-body font-weight-bold">
            <ul class="list-group">
                @foreach($compraVenta as $anuncio)
                 <li class="list-group-item">
                    <div class="d-flex bd-highlight">
                        <!-- Nombre de la publicación -->
                        <div class="p-2 flex-grow-1 bd-highlight">
                            {{$anuncio->nombreArt}}
                        </div>

                        <!-- Opción para ver publicación -->
                        <div class="p-2 bd-highlight">

                             @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Ver Detalles','id_modal'=>'anuncio'.$anuncio->id,'title'=>'DETALLES DE LA TUTORÍA','vista'=>'clasificado.Tutorias.detalle'])                            
                        </div>

                        <!-- Opción para aprobar publicación -->
                        <div class="p-2 bd-highlight">
                            <form action="{{route('postsMod.aprobarCyVPost', $anuncio->id)}}" method="post">
                                @csrf
                                <button class="btn btn-success" type="submit">
                                    <i class="far fa-thumbs-up"></i>
                                    Aprobar
                                </button>
                            </form>
                        </div>

                        <!-- Opción para rechazar publicación -->
                        <div class="p-2 bd-highlight">
                            <form action="{{route('postsMod.rechazarCyVPost', $anuncio->id)}}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">
                                    <i class="far fa-thumbs-down"></i>
                                    Rechazar
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>

        </div>
    </div>
@endif

<br>

<!-- Moderación de Tutorías -->
@if($tutorias->count() === 0)
    <div class="alert alert-success" role="alert">
        <h6 class="text-center font-weight-bold"> No tiene publicaciones de Tutorías por Moderar </h6>
    </div>
@else
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
           <h4>Publicaciones de Tutorías Por Moderar: <span class="badge badge-primary">{{$tutorias->count()}}</span> </h4>
        </div>
        <div class="card-body font-weight-bold">
            <ul class="list-group">


                @foreach($tutorias as $tutoria)

                 <li class="list-group-item">
                    <div class="d-flex bd-highlight">
                        <!-- Nombre de la publicación -->
                        <div class="p-2 flex-grow-1 bd-highlight">
                            {{$tutoria->titulo}}
                        </div>

                        <!-- Opción para ver publicación -->
                        
                       

                        <!-- Opción para aprobar publicación -->
                        <div class="p-2 bd-highlight">
                            <form action="{{route('postsMod.aprobarTutPost', $tutoria->id)}}" method="post">
                                @csrf
                                <button class="btn btn-success" type="submit">
                                    <i class="far fa-thumbs-up"></i>
                                    Aprobar
                                </button>
                            </form>
                        </div>

                        <!-- Opción para rechazar publicación -->
                        <div class="p-2 bd-highlight">
                            <form action="{{route('postsMod.rechazarTutPost', $tutoria->id)}}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">
                                    <i class="far fa-thumbs-down"></i>
                                    Rechazar
                                </button>
                            </form>
                        </div>

                        <div class="p-2 bd-highlight">
                            @include('clasificado.Anuncios.modal', $data=[$tutoria,'btn_nombre'=>'Ver Detalles','id_modal'=>'tutoria'.$tutoria->id,'title'=>'DETALLES DE LA TUTORÍA','vista'=>'clasificado.Tutorias.detalle'])                            
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>

        </div>
    </div>
@endif

<br>

@if($hospedajes->count() === 0)
    <div class="alert alert-success" role="alert">
        <h6 class="text-center font-weight-bold"> No tiene publicaciones de Alquiler/Hospedaje por Moderar </h6>
    </div>
@else
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
           <h4>Publicaciones de Alquiler/Hospedaje Por Moderar: <span class="badge badge-primary">{{$hospedajes->count()}}</span> </h4>
        </div>
        <div class="card-body font-weight-bold">
            <ul class="list-group">
                @foreach($hospedajes as $hospedaje)
                 <li class="list-group-item">
                 <div class="d-flex bd-highlight">
                    <!-- Nombre de la publicación -->
                    <div class="p-2 flex-grow-1 bd-highlight">
                        {{$hospedaje->titulo}}
                    </div>

                    <!-- Opción para ver publicación -->
                   
                    <div class="p-2 bd-highlight">
                        <button class="btn btn-secondary" type="button">
                               
                            <i class="fas fa-eye"></i>
                           
                            Ver Publicación
                        </button>
                    </div>

                    <!-- Opción para aprobar publicación -->
                    <div class="p-2 bd-highlight">
                        <form action="{{route('postsMod.aprobarHosPost', $hospedaje->id)}}" method="post">
                            @csrf
                            <button class="btn btn-success" type="submit">
                                <i class="far fa-thumbs-up"></i>
                                Aprobar
                            </button>
                        </form>
                    </div>

                    <!-- Opción para rechazar publicación -->
                    <div class="p-2 bd-highlight">
                        <form action="{{route('postsMod.rechazarHosPost', $hospedaje->id)}}" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit">
                                <i class="far fa-thumbs-down"></i>
                                Rechazar
                            </button>
                        </form>
                    </div>
                </div>
                </li>
                @endforeach

            </ul>

        </div>
    </div>
@endif

@endsection
