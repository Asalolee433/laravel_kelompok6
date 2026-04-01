<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LapanganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// halaman user
Route::get('/index', function () {
    return view('guest.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

//lapangan
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/lapangan', [LapanganController::class, 'index']);
    Route::get('/lapangan/create', [LapanganController::class, 'create']);
    Route::post('/lapangan', [LapanganController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
