@extends('adminlte::page')

@section('title', 'Crear sucursal')

@section('content_header')
    <h1>Crear Sucursal</h1>
@stop

@section('content')

<form action="/sucursals" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Número de contacto</label>
        <input id="numero" name="numero" type="tel" class="form-control" tabindex="2">
        @if ($errors->has('numero'))
            <span class="error text-danger" for="input-name">{{ $errors->first('numero')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="4">
        @if ($errors->has('direccion'))
            <span class="error text-danger" for="input-name">{{ $errors->first('direccion')}}</span>
        @endif
    </div>
    <a href="/sucursals" class="btn btn-secondary" tabindex="5">Cancelar</a>
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