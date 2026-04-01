<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;  
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LapanganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/guest', function () {
    return view('guest.index');
})->name('guest');

// halaman user
Route::get('/index', function () {
    return view('guest.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

//lapangan
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/lapangan', [LapanganController::class, 'index']);
    Route::get('/lapangan/create', [LapanganController::class, 'create']);
    Route::post('/lapangan', [LapanganController::class, 'store']);
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/edit/{id}', [DashboardController::class, 'edit'])->name('dashboard.edit');
Route::post('/dashboard/update/{id}', [DashboardController::class, 'update'])->name('dashboard.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
