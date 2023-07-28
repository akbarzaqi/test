<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PenulisController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();
Route::prefix('admin')
    // ->namespace('Admin')
    // ->middleware(['auth', ['admin']])
    ->group(function(){
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('penulis', PenulisController::class);
        Route::resource('genre', GenreController::class);
        Route::resource('buku', BukuController::class);
    });

