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
            <td>{{$cliente->direccion}}</td>
            <td>
                <form action="{{route('clientes.destroy', $cliente->id)}}" method="POST">
                    <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection