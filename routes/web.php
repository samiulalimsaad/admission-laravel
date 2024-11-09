<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\Profile;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/info', function () {
    return view('info');
})->name('info');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    $profile = Profile::where('id', 2)->first();
    return view('dashboard', ["profile"=> $profile]);
})->name('dashboard');


Route::get('/confirmation/{id}', function (int $id) {
    $profile = Profile::where('id', $id)->first();
    return view('confirmation', ["profile"=> $profile]);
})->name('confirmation');


Route::get('/complete/{id}', function (int $id) {
    $profile = Profile::where('id', $id)->first();
    return view('complete', ["profile"=> $profile]);
})->name('complete');




Route::middleware('guest')->group(function () {
    // If the user is not logged in, the registration and profile creation happens together
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/profile/phone', [ProfileController::class, 'phone'])->name('profile.phone');
    Route::get('/profile/phone/verify/{id}', function (int $id) {
        $profile = Profile::where('id', $id)->first();
        return view('otp', ["profile"=> $profile]);
    })->name('otp');

    Route::post('/profile/phone/verify', [ProfileController::class, 'otp'])->name('profile.otp');

    Route::get('/profile/units/{id}', function (int $id) {
        $profile = Profile::where('id', $id)->first();
        return view('units', ["profile"=> $profile]);
    })->name('units');

    Route::post('/profile/units', [ProfileController::class, 'units'])->name('profile.units');

    Route::get('/profile/quota/{id}', function (int $id) {
        $profile = Profile::where('id', $id)->first();
        return view('quota', ["profile"=> $profile]);
    })->name('quota');

    Route::post('/profile/quota', [ProfileController::class, 'quota'])->name('profile.quota');

    Route::post('/invoice/{applicationId}', [ProfileController::class, 'invoice'])->name('invoice');

});



Route::get('/upload-image/{id}', [ImageUploadController::class, 'showUploadForm']);
Route::post('/upload-image', [ImageUploadController::class, 'storeImage'])->name('upload.image');



Route::get('/payment/{id}', [PaymentController::class, 'showForm'])->name('payment');
Route::post('/payment', [PaymentController::class, 'processPayment'])->name('payment.process');


Route::get('/invoice/{applicationId}', [InvoiceController::class, 'generateInvoice'])->name('invoice.generate');
