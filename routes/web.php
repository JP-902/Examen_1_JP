<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/empleados', [App\Http\Controllers\EmpleadoController::class, 'index']);
route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index']);
route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index']);
route::get('/materiales_proveedores', [App\Http\Controllers\MaterialProveedorController::class, 'index']);
route::get('/pedidos', [App\Http\Controllers\PedidoController::class, 'index']);
route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index']);
route::get('/proveedores', [App\Http\Controllers\ProveedorController::class, 'index']);

