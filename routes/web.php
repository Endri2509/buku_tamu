<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukutamuController;
use App\Http\Controllers\ChartController;

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
Route::get('/ulp',[BukutamuController::class, 'ulp'])->name('bukutamu.ulp');
Route::get('/lpse',[BukutamuController::class, 'lpse'])->name('bukutamu.lpse');
Route::get('/advokasi',[BukutamuController::class, 'advokasi'])->name('bukutamu.advokasi');
Route::get('/',[BukutamuController::class, 'create'])->name('bukutamu.create');
Route::post('/',[BukutamuController::class, 'store'])->name('bukutamu.store');
Route::get('/chart', [BukutamuController::class,'chart'])->name('bukutamu.chart');

Route::get('/print', [BukutamuController::class, 'printPDF'])->name('bukutamu.printPDF');