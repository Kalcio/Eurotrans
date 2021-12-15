@extends('adminlte::page')

@section('title', 'Servicio')

@section('content_header')
    <h1>Listado Servicios</h1>
@stop

@section('content')
<a href="servicios/create" class="btn btn-primary mb-3">CREAR</a>

<table id="servicios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Cliente</th>
            <th scope="col">Tipo</th>
            <th scope="col">Ruta</th>
            <th scope="col">Estado</th>
            <th scope="col">Incoterm</th>
            <th scope="col">Agente</th>
            <th scope="col">Carga</th>
            <th scope="col">Seguro</th>
            <th scope="col">Obs</th>
            <th scope="col">Creación</th>
            <th scope="col">Actualización</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($servicios as $servicio)
        <tr>
            <td>{{$servicio->id}}</td>
            <td>{{$servicio->id_cliente}} - {{$servicio->clientes->nombre}}</td>
            <td>{{$servicio->tipos->clasificacion}}</td>
            <td>{{$servicio->rutas->origen}} a {{$servicio->rutas->destino}}</td>
            <td>{{$servicio->id_estado}} - {{$servicio->estados->situacion}}</td>
            <td>{{$servicio->incoterms->clasificacion}}</td>
            <td>{{$servicio->id_agente}} - {{$servicio->agentes->nombre}}</td>
            <td>{{$servicio->carga}}</td>
            <td>{{$servicio->seguro}}</td>
            <td>{{$servicio->observaciones}}</td>
            <td>{{$servicio->created_at}}</td>
            <td>{{$servicio->updated_at}}</td>
            <td>
                <div class="btn-group">
                    <a href="/servicios/{{$servicio->id}}/edit" class="btn btn-info">Editar</a>
                    <form action="{{route('servicios.destroy', $servicio->id)}}"  class="alertButton" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="57x57" href="{{ asset('favicons/Logo_E.png') }}">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#servicios').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es-cl.json"
            },
            "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]],
            responsive: "true",
            dom: 'Bfrtilp',
            buttons:[
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> ',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success',
                    exportOptions: {
                        columns: [':visible']
                    }
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i> ',
                    orientation: 'landscape',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger',
                    exportOptions: {
                        columns: [':visible']
                    }
                },
                { 
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> ',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-info',
                    exportOptions: {
                        columns: [':visible']
                    }
                },
                {
                    extend: 'colvis',
                    columns: ':not(.noVis)',
                    className: 'btn btn-info'
                },
            ]
        });
    } );
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('eliminar') == 'ok')
        <script>
        Swal.fire(
        '¡Eliminado!',
        'El servicio ha sido eliminado ',
        'success'
        )
        </script>
    @endif

    <script>
        $('.alertButton').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '',
            text: "¿Esta seguro que deseea eliminar el servicio?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {


                    this.submit();
                }
            })
        });
    </script>
@stop