@extends('adminlte::page')

@section('title', 'Ingresar Incoterm')

@section('content_header')
    <h1>Ingresar Incoterm</h1>
@stop

@section('content')

<form action="/incoterms" method="POST">
    @csrf
    <div class="mb-3">
        <label for="clasificacion" class="form-label">Clasificacion</label>
        <input id="clasificacion" name="clasificacion" type="text" class="form-control" tabindex="1" value="{{old('clasificacion')}}" autofocus>
        @if ($errors->has('clasificacion'))
            <span class="error text-danger" for="input-clasificacion">{{ $errors->first('clasificacion')}}</span>
        @endif
    </div>
    <a href="/incoterms" class="btn btn-secondary" tabindex="9">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="icon" type="image/png" sizes="57x57" href="{{ asset('favicons/Logo_E.png') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop