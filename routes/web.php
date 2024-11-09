<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/info', function () {
    return view('info');
})->name('info');

Route::get('/login', function () {
    return view('login');
})->name('login');




Route::middleware('guest')->group(function () {
    // If the user is not logged in, the registration and profile creation happens together
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
});

Route::middleware('auth')->group(function () {
    // Profile edit route for logged-in users
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/edit', [ProfileController::class, 'createOrUpdateProfile'])->name('profile.createOrUpdate');
});
