@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>BIENVENIDO</h1>
@stop

@section('content')
    <p>Seleccione alguna opción</p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div id="clientes" class="small-box bg-info">
                    
                    <div class="inner">
                        <h3>{{App\Models\Cliente::count()}}</h3>

                        <p>Clientes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/clientes" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{App\Models\Empleado::count()}}</h3>

                        <p>Empleados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                    </div>
                    <a href="/empleados" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{App\Models\Proveedor::count()}}</h3>

                        <p>Proveedores</p>
                    </div>
                    <div class="icon">
                        <i class="iconify" data-icon="fa-solid:truck-loading"></i>
                    </div>
                    <a href="/proveedors" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{App\Models\Sucursal::count()}}</h3>

                        <p>Sucursales</p>
                    </div>
                    <div class="icon">
                        <i class="iconify" data-icon="clarity:building-solid"></i>
                    </div>
                    <a href="/sucursals" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" type="image/png" sizes="57x57" href="{{ asset('favicons/Logo_E.png') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
@stop