@extends('layouts.app')

@section('content')

<aside>
    <a href="{{ url('eventos') }}">
        {{ __('Eventos') }}
    </a> <br>

    <a href="{{ url('bolsadetrabajo') }}">
        {{ __('Bolsa de Trabajo') }}
    </a> <br>
</aside>



@endsection
