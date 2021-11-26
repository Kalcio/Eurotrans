@extends('adminlte::page')

@section('title', 'Editar Provee')

@section('content_header')
    <h1>Editar Provee</h1>
@stop

@section('content')
    
<form action="/provees/{{$provee->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input id="fecha" name="fecha" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="tel" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Forma Pago</label>
        <input id="forma_pago" name="forma_pago" type="text" class="form-control" tabindex="3">
    </div>
    <a href="/provees" class="btn btn-secondary" tabindex="5">Cancelar</a>
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