<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

// Clientes

// Route::get('/clientes', [ClienteController::class, 'index']);
Route::resource('clientes', 'ClienteController');

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::get('/clientes/show', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/edit', [ClienteController::class, 'edit'])->name('clientes.edit');

