@extends('adminlte::page')

@section('title', 'Ingresar empleado')

@section('content_header')
    <h1>Ingresar Empleado</h1>
@stop

@section('content')

<form action="/users" method="POST">
    @csrf
    <div class="mb-3">
        <label for="rut" class="form-label">RUT</label>
        <input id="rut" name="rut" type="text" class="form-control" tabindex="1" value="{{old('rut')}}" autofocus>
        @if ($errors->has('rut'))
            <span class="error text-danger" for="input-rut">{{ $errors->first('rut')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="2" value="{{old('name')}}" autofocus>
        @if ($errors->has('name'))
            <span class="error text-danger" for="input-name">{{ $errors->first('name')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Número de contacto</label>
        <input id="numero" name="numero" type="tel" class="form-control" tabindex="3" value="{{old('numero')}}" autofocus>
        @if ($errors->has('numero'))
            <span class="error text-danger" for="input-numero">{{ $errors->first('numero')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo Electronico</label>
        <input id="email" name="email" type="text" class="form-control" tabindex="4" value="{{old('email')}}" autofocus>
        @if ($errors->has('email'))
            <span class="error text-danger" for="input-email">{{ $errors->first('email')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="5" value="{{old('direccion')}}" autofocus>
        @if ($errors->has('direccion'))
            <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input id="password" name="password" type="password" class="form-control" required autocomplete="new-password" tabindex="6">
        @if ($errors->has('password'))
            <span class="error text-danger" for="input-password">{{ $errors->first('password')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Contraseña</label>
        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" tabindex="7">
        @if ($errors->has('password'))
            <span class="error text-danger" for="input-password">{{ $errors->first('password')}}</span>
        @endif
        
    </div>
    <a href="/clientes" class="btn btn-secondary" tabindex="9">Cancelar</a>
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