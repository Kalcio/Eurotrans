@extends('adminlte::page')

@section('title', 'Editar Puede_Poseer')

@section('content_header')
    <h1>Editar Puede Poseer</h1>
@stop

@section('content')
    
<form action="/puede_poseers/{{$puede_poseer->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="text" class="form-control" value="{{$puede_poseer->estado}}">
    </div>
    <a href="/puede_poseers" class="btn btn-secondary" tabindex="5">Cancelar</a>
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