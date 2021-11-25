<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

//Ruta Tablas
Route::resource('clientes', 'App\Http\Controllers\ClienteController');
Route::resource('provee', 'App\Http\Controllers\ProveeController');
Route::resource('servicio', 'App\Http\Controllers\ServicioController');
Route::resource('tipo', 'App\Http\Controllers\TipoController');
Route::resource('ruta', 'App\Http\Controllers\RutaController');
Route::resource('agente', 'App\Http\Controllers\AgenteController');
Route::resource('puede_poseer', 'App\Http\Controllers\Puede_PoseerController');
Route::resource('proveedor', 'App\Http\Controllers\ProveedorController');
Route::resource('estado', 'App\Http\Controllers\EstadoController');
Route::resource('incoterm', 'App\Http\Controllers\IncotermController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

Route::get('/dash/crud', function() {
    return view('crud.index');
});

Route::get('/dash/crud/create', function() {
    return view('crud.create');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
