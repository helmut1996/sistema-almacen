<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Categorias;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DetallesVentas;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Usuarios;
use App\Http\Controllers\Ventas;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

//creacion de admin prueba
// Route::get('/crear-admin', [AuthController::class,'crearAdmin']);       

Route::get('/', [AuthController::class,'index'])->name('login');
Route::post('/', [AuthController::class,'logear'])->name('logear');


Route::middleware('auth')->group(function(){
Route::get('/home', [Dashboard::class,'index'])->name('home');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');
});

Route::prefix('ventas')->middleware('auth')->group(function(){
    Route::get('/nueva-venta', [Ventas::class,'index'])->name('nueva-ventas');
});

Route::prefix('ventas')->middleware('auth')->group(function(){
    Route::get('/detalle-venta', [DetallesVentas::class,'index'])->name('detalles-venta');
});

Route::prefix('categorias')->middleware('auth')->group(function(){
    Route::get('/', [Categorias::class,'index'])->name('categorias');
    Route::get('/crear-categoria', [Categorias::class,'create'])->name('categorias.create');
    Route::post('/store', [Categorias::class,'store'])->name('categorias.store');
});

Route::prefix('clientes')->middleware('auth')->group(function(){
    Route::get('/', [Clientes::class,'index'])->name('clientes');
});

Route::prefix('usuarios')->middleware('auth')->group(function(){
    Route::get('/', [Usuarios::class,'index'])->name('usuarios');
});

Route::prefix('productos')->middleware('auth')->group(function(){
    Route::get('/', [Productos::class,'index'])->name('productos');
});