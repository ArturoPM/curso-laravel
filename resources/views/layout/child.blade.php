@extends('layout.app')

@section('title', 'Pagina hija')

@section('content')
    <h1>Contenido de la pagina hija</h1>
    <p>Contenido de la pagina</p>
    <h2>Tu nombre es {{$edad}} y tienes {{$nombre}} años</h2>
    @component('components.alert')
        @slot('title', 'Titulo de la alerta')
        @slot('content', 'Contenido de la alerta')
    @endcomponent
@endsection