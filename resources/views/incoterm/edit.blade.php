@extends('adminlte::page')

@section('title', 'Editar Incoterm')

@section('content_header')
    <h1>Editar Incoterm</h1>
@stop

@section('content')
    
<form action="/incoterms/{{$incoterm->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Clasificacion</label>
        <input id="clasificacion" name="clasificacion" type="text" class="form-control" value="{{$incoterm->clasificacion}}" value="{{old('clasificacion')}}" autofocus>
        @if ($errors->has('clasificacion'))
            <span class="error text-danger" for="input-clasificacion">{{ $errors->first('clasificacion')}}</span>
        @endif
    </div>
    <a href="/incoterms" class="btn btn-secondary" tabindex="5">Cancelar</a>
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