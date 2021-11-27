@extends('adminlte::page')

@section('title', 'Editar empleado')

@section('content_header')
    <h1>Editar empleado</h1>
@stop

@section('content')
    
<form action="/empleados/{{$empleado->rut}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">RUT</label>
        <input id="rut" name="rut" type="text" class="form-control" value="{{$empleado->rut}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$empleado->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Número de contacto</label>
        <input id="numero" name="numero" type="tel" class="form-control" value="{{$empleado->numero}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo Electronico</label>
        <input id="correo" name="correo" type="text" class="form-control" value="{{$empleado->email}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección</label>
        <input id="direccion" name="direccion" type="text" class="form-control" value="{{$empleado->direccion}}">
    </div>
    <a href="/empleados" class="btn btn-secondary" tabindex="5">Cancelar</a>
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