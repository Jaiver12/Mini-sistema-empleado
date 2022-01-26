<?php

use App\Http\Controllers\EmpleadoController;
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

Route::get('/', [EmpleadoController::class, 'index']);
Route::get('/registrar', [EmpleadoController::class, 'create'])->name('registrar');
Route::get('/edit/{id}', [EmpleadoController::class, 'edit'])->name('edit');
Route::post('/store', [EmpleadoController::class, 'store'])->name('store');
Route::put('/update/{id}', [EmpleadoController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [EmpleadoController::class, 'destroy'])->name('delete');
