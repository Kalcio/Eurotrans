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
Route::resource('sucursals', 'App\Http\Controllers\SucursalController');
Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('provees', 'App\Http\Controllers\ProveeController');
Route::resource('servicios', 'App\Http\Controllers\ServicioController');
Route::resource('tipos', 'App\Http\Controllers\TipoController');
Route::resource('rutas', 'App\Http\Controllers\RutaController');
Route::resource('agentes', 'App\Http\Controllers\AgenteController');
Route::resource('puede_poseers', 'App\Http\Controllers\Puede_PoseerController');
Route::resource('proveedors', 'App\Http\Controllers\ProveedorController');
Route::resource('estados', 'App\Http\Controllers\EstadoController');
Route::resource('incoterms', 'App\Http\Controllers\IncotermController');

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
