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
Route::get('/pesan/{id}', [App\Http\Controllers\PesanController::class, 'index'])->name('home');
Route::post('pesan/{id}', [App\Http\Controllers\PesanController::class,'pesan'])->name('home');
Route::get('check-out', [App\Http\Controllers\PesanController::class,'check_out'])->name('home');

Route::delete('check-out/{id}', [App\Http\Controllers\PesanController::class, 'delete'])->name('home');

Route::get('konfirmasi-check-out', [App\Http\Controllers\PesanController::class, 'konfirmasi'])->name('home');
Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('home');
Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('home');

Route::get('history', [App\Http\Controllers\HistoryController::class, 'index'])->name('home');
Route::get('history/{id}', [App\Http\Controllers\HistoryController::class, 'detail'])->name('home');
