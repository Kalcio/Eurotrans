@extends('adminlte::page')

@section('title', 'Editar Ruta')

@section('content_header')
    <h1>Editar Ruta</h1>
@stop

@section('content')
    
<form action="/rutas/{{$ruta->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Origen</label>
        <input id="origen" name="origen" type="text" class="form-control" value="{{$ruta->origen}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Destino</label>
        <input id="destino" name="destino" type="tel" class="form-control" value="{{$ruta->destino}}">
    </div>
    <a href="/rutas" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="icon" type="image/png" sizes="57x57" href="{{ asset('favicons/Logo_E.png') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop