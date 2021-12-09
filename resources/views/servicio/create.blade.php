@extends('adminlte::page')

@section('title', 'Crear servicio')

@section('content_header')
    <h1>Crear Servicio</h1>
@stop

@section('content')

<form action="/servicios" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Carga</label>
        <input id="carga" name="carga" type="text" class="form-control" tabindex="1" value="{{old('carga')}}" autofocus>
        @if ($errors->has('carga'))
            <span class="error text-danger" for="input-carga">{{ $errors->first('carga')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Seguro</label>
        <input id="seguro" name="seguro" type="tel" class="form-control" tabindex="2" value="{{old('seguro')}}" autofocus>
        @if ($errors->has('seguro'))
            <span class="error text-danger" for="input-seguro">{{ $errors->first('seguro')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Observaciones</label>
        <input id="observaciones" name="observaciones" type="text" class="form-control" tabindex="3" value="{{old('observaciones')}}" autofocus>
        @if ($errors->has('observaciones'))
            <span class="error text-danger" for="input-observaciones">{{ $errors->first('observaciones')}}</span>
        @endif
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