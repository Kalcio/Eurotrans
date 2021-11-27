@extends('adminlte::page')

@section('title', 'Editar servicio')

@section('content_header')
    <h1>Editar Servicio</h1>
@stop

@section('content')
    
<form action="/servicios/{{$servicio->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Carga</label>
        <input id="carga" name="carga" type="text" class="form-control" value="{{$servicio->carga}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Seguro</label>
        <input id="seguro" name="seguro" type="tel" class="form-control" value="{{$servicio->seguro}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Observaciones</label>
        <input id="observaciones" name="observaciones" type="text" class="form-control" value="{{$servicio->observaciones}}">
    </div>
    <a href="/servicios" class="btn btn-secondary" tabindex="5">Cancelar</a>
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