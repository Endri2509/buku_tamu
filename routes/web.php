<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukutamuController;

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

Route::get('/admin',[BukutamuController::class, 'index'])->name('bukutamu.index');
Route::get('/',[BukutamuController::class, 'create'])->name('bukutamu.create');
Route::post('/',[BukutamuController::class, 'store'])->name('bukutamu.store');