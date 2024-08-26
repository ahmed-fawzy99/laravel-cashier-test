<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/checkout-success', function () {
    return Inertia::render('success');
})->name('checkout-success');

Route::get('/home', function () {
    return Inertia::render('success');
})->name('home');

Route::get('/checkout-failure', function () {
    return Inertia::render('failure');
})->name('checkout-failure');



Route::post('/stripe/webhook', [StripeController::class, 'webhook'])->name('stripe.webhook');
Route::get('/stripe/checkout', [StripeController::class, 'checkout'])->name('stripe.checkout')->middleware(\Illuminate\Http\Middleware\HandleCors::class);
Route::resource('stripe', StripeController::class);

require __DIR__.'/auth.php';
