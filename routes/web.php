<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
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

Route::get('/', [BeritaController::class, 'index'])->name('berita.index');
Route::get('tambah', [BeritaController::class, 'tambah'])->name('berita.tambah');
Route::post('store', [BeritaController::class, 'store'])->name('berita.store');
Route::get('view/{id}', [BeritaController::class, 'view'])->name('berita.view');
Route::get('edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
Route::post('update/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::get('destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');