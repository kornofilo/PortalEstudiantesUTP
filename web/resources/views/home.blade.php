@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="{{ url('eventos') }}" role="button">
    <i class="fas fa-calendar-alt"></i>
    {{ __('Eventos') }}
</a>

<a class="btn btn-primary" href="{{ url('bolsadetrabajo') }}" role="button">
    <i class="fas fa-briefcase"></i>
    {{ __('Bolsa de Trabajo') }}
</a>

<a class="btn btn-primary" href="" role="button">
    <i class="far fa-newspaper"></i>
    {{ __('Clasificados') }}
</a>



<h2>Ultimas Publicaciones</h2>

@endsection
