@extends('adminlte::page')

@section('title', 'Crear Agente')

@section('content_header')
    <h1>Crear Agente</h1>
@stop

@section('content')

<form action="/agentes" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{old('nombre')}}" autofocus>
        @if ($errors->has('nombre'))
            <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Número de contacto</label>
        <input id="numero" name="numero" type="tel" class="form-control" tabindex="2" value="{{old('numero')}}" autofocus>
        @if ($errors->has('numero'))
            <span class="error text-danger" for="input-numero">{{ $errors->first('numero')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo Electronico</label>
        <input id="email" name="email" type="text" class="form-control" tabindex="3" value="{{old('email')}}" autofocus>
        @if ($errors->has('email'))
            <span class="error text-danger" for="input-email">{{ $errors->first('email')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="4" value="{{old('direccion')}}" autofocus>
        @if ($errors->has('direccion'))
            <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion')}}</span>
        @endif
    </div>
    <a href="/agentes" class="btn btn-secondary" tabindex="5">Cancelar</a>
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