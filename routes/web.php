<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlkerController;
use App\Http\Controllers\SalkerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::put('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {

    // ROUTE ALKER
    Route::get('/alkers', [AlkerController::class, 'index'])->name('alkers.index');
    Route::get('/alkers/create', [AlkerController::class, 'create'])->name('alkers.create');
    Route::post('/alkers', [AlkerController::class, 'store'])->name('alkers.store');
    Route::get('/alkers/{id}/edit', [AlkerController::class, 'edit'])->name('alkers.edit');
    Route::put('/alkers/{id}', [AlkerController::class, 'update'])->name('alkers.update');
    Route::delete('/alkers/{id}', [AlkerController::class, 'destroy'])->name('alkers.destroy');

    // ROUTE SALKER
    Route::get('/salkers', [SalkerController::class, 'index'])->name('salkers.index');
    Route::get('/salkers/create', [SalkerController::class, 'create'])->name('salkers.create');
    Route::post('/salkers', [SalkerController::class, 'store'])->name('salkers.store');
    Route::get('/salkers/{id}/edit', [SalkerController::class, 'edit'])->name('salkers.edit');
    Route::put('/salkers/{id}', [SalkerController::class, 'update'])->name('salkers.update');
    Route::delete('/salkers/{id}', [SalkerController::class, 'destroy'])->name('salkers.destroy');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
