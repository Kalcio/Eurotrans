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
        <input id="numero" name="numero" type="text" class="form-control" tabindex="2" value="{{old('numero')}}" autofocus>
        @if ($errors->has('numero'))
            <span class="error text-danger" for="input-numero">{{ $errors->first('numero')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="4" value="{{old('direccion')}}" autofocus>
        @if ($errors->has('direccion'))
            <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Región</label>
        <input id="region" name="region" type="text" class="form-control" tabindex="5" value="{{old('region')}}" autofocus>
        @if ($errors->has('region'))
            <span class="error text-danger" for="input-region">{{ $errors->first('region')}}</span>
        @endif
    </div>
    <a href="/sucursals" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="icon" type="image/png" sizes="57x57" href="{{ asset('favicons/Logo_E.png') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop