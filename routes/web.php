<?php

use App\Http\Controllers\ArtikelController;
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

Route::get('movie', [App\Http\Controllers\MovieController::class,'getMovie']);
Route::get('movie/{id}', [App\Http\Controllers\MovieController::class,'getMovieById']);

Route::get('artikel', [ArtikelController::class,'getArtikel']);
Route::get('artikel/{id}', [ArtikelController::class,'getArtikelById']);
Route::get('artikel/kategori/{kategori}', [ArtikelController::class,'getArtikelByKategori']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route crud
use App\Http\Controllers\PenulisController;
Route::resource('penulis', PenulisController::class);

// route crud
use App\Http\Controllers\GenreController;
Route::resource('genre', GenreController::class);

// route crud
use App\Http\Controllers\BukuController;
Route::resource('buku', BukuController::class);
