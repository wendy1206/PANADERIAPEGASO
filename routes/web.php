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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* DUEÑO */
Route::resource('/dueño', 'App\Http\Controllers\DuenoController')->middleware('auth');
Route::get('/dueño/listar', [App\Http\Controllers\DuenoController::class, 'list'])->middleware('auth');
Route::get('/dueño/productos', [App\Http\Controllers\DuenoController::class, 'productos'])->middleware('auth');
Route::get('/dueño/vendedores', [App\Http\Controllers\DuenoController::class, 'vendedores'])->middleware('auth');
Route::get('/dueño/domiciliarios', [App\Http\Controllers\DuenoController::class, 'domiciliarios'])->middleware('auth');
Route::get('/dueño/ventas', [App\Http\Controllers\DuenoController::class, 'ventas'])->middleware('auth');
Route::get('/dueño/clientes', [App\Http\Controllers\DuenoController::class, 'clientes'])->middleware('auth');

/* ADMINISTRADOR */
