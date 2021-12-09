@extends('adminlte::page')

@section('title', 'Crear Provee')

@section('content_header')
    <h1>Crear Provee</h1>
@stop

@section('content')

<form action="/provees" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input id="fecha" name="fecha" type="text" class="form-control" tabindex="1" value="{{old('fecha')}}" autofocus>
        @if ($errors->has('fecha'))
            <span class="error text-danger" for="input-fecha">{{ $errors->first('fecha')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="tel" class="form-control" tabindex="2" value="{{old('precio')}}" autofocus>
        @if ($errors->has('precio'))
            <span class="error text-danger" for="input-precio">{{ $errors->first('precio')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Forma Pago</label>
        <input id="forma_pago" name="forma_pago" type="text" class="form-control" tabindex="3" value="{{old('forma_pago')}}" autofocus>
        @if ($errors->has('forma_pago'))
            <span class="error text-danger" for="input-forma_pago">{{ $errors->first('forma_pago')}}</span>
        @endif
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