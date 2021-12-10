@extends('adminlte::page')

@section('title', 'Crear Estado')

@section('content_header')
    <h1>Crear Estado</h1>
@stop

@section('content')

<form action="/estados" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Situacion</label>
        <input id="situacion" name="situacion" type="text" class="form-control" tabindex="1" value="{{old('situacion')}}" autofocus>
        @if ($errors->has('situacion'))
            <span class="error text-danger" for="input-situacion">{{ $errors->first('situacion')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Observacion</label>
        <input id="observacion" name="observacion" type="tel" class="form-control" tabindex="2" value="{{old('observacion')}}" autofocus>
        @if ($errors->has('observacion'))
            <span class="error text-danger" for="input-observacion">{{ $errors->first('observacion')}}</span>
        @endif
    </div>
    <a href="/estados" class="btn btn-secondary" tabindex="5">Cancelar</a>
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