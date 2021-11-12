@extends('layouts.plantillabase')

@section('contenido')
<a href="clientes/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th class="col">ID</th>
            <th class="col">Nombre</th>
            <th class="col">Número de contacto</th>
            <th class="col">Email</th>
            <th class="col">Dirección</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->numero}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->direccion}</td>
            <td>
                <a class="btn btn-info">Editar</a>
                <button>Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection