@extends('adminlte::page')

@section('title', 'Editar servicio')

@section('content_header')
    <h1>Editar Servicio</h1>
@stop

@section('content')
    
<form action="/servicios/{{$servicio->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="form-group mb-3 col-4" >
            <label>Seleccionar cliente</label>
            <select class="form-control" name="id_cliente" id="id_cliente">
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->id }} - {{ $cliente->nombre }}</option>
                @endforeach
            </select>
            @if ($errors->has('id_cliente'))
                <span class="error text-danger" for="id_cliente">El campo cliente es obligatorio</span>
            @endif
        </div>
        <div class="form-group mb-3 col-4" >
            <label>Seleccionar tipo</label>
            <select class="form-control" name="id_tipo" id="id_tipo">
                <option value="">--Seleccione el tipo de transporte--</option>
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->id }} - {{ $tipo->clasificacion }}</option>
                @endforeach
            </select>
            @if ($errors->has('id_tipo'))
                <span class="error text-danger" for="id_tipo">El campo tipo es obligatorio</span>
            @endif
        </div>
        <div class="form-group mb-3 col-4" >
            <label>Seleccionar Ruta</label>
            <select class="form-control" name="id_ruta" id="id_ruta">
                <option value="">--Seleccione una Ruta--</option>
                @foreach ($rutas as $ruta)
                    <option value="{{ $ruta->id }}">{{ $ruta->id }} - {{ $ruta->origen }} -> {{ $ruta->destino }}</option>
                @endforeach
            </select>
            @if ($errors->has('id_ruta'))
                <span class="error text-danger" for="id_ruta">El campo ruta es obligatorio</span>
            @endif
        </div>
        <div class="form-group mb-3 col-4" >
            <label>Seleccionar Estado</label>
            <select class="form-control" name="id_estado" id="id_estado">
                <option value="">--Seleccione un Estado--</option>
                @foreach ($estados as $estado)
                    <option value="{{ $estado->id }}">{{ $estado->id }} - {{ $estado->situacion }}</option>
                @endforeach
            </select>
            @if ($errors->has('id_estado'))
                <span class="error text-danger" for="id_estado">El campo estado es obligatorio</span>
            @endif
        </div>
        <div class="form-group mb-3 col-4" >
            <label>Seleccionar norma Incoterm</label>
            <select class="form-control" name="id_incoterm" id="id_incoterm">
                <option value="">--Seleccione norma Incoterm--</option>
                @foreach ($incoterms as $incoterm)
                    <option value="{{ $incoterm->id }}">{{ $incoterm->id }} - {{ $incoterm->clasificacion }}</option>
                @endforeach
            </select>
            @if ($errors->has('id_incoterm'))
                <span class="error text-danger" for="id_incoterm">El campo incoterm es obligatorio</span>
            @endif
        </div>
        <div class="form-group mb-3 col-4" >
            <label>Seleccionar Agente</label>
            <select class="form-control" name="id_agente" id="id_agente">
                <option value="">--Seleccione un Agente--</option>
                @foreach ($agentes as $agente)
                    <option value="{{ $agente->id }}">{{ $agente->id }} - {{ $agente->nombre }}</option>
                @endforeach
            </select>
            @if ($errors->has('id_agente'))
                <span class="error text-danger" for="id_agente">El campo agente es obligatorio</span>
            @endif
        </div>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Carga</label>
        <input id="carga" name="carga" type="text" class="form-control" value="{{$servicio->carga}}">
        @if ($errors->has('carga'))
            <span class="error text-danger" for="input-carga">{{ $errors->first('carga')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Seguro</label>
        <input id="seguro" name="seguro" type="tel" class="form-control" value="{{$servicio->seguro}}">
        @if ($errors->has('seguro'))
            <span class="error text-danger" for="input-seguro">{{ $errors->first('seguro')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Observaciones</label>
        <input id="observaciones" name="observaciones" type="text" class="form-control" value="{{$servicio->observaciones}}">
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