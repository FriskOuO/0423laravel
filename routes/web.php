<?php

use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceDemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/podcasts/{id}', [PodcastController::class, 'show'])->name('podcasts.show');

Route::get('/services', [ServiceDemoController::class, 'index'])->name('services.index');
Route::get('/services/first', [ServiceDemoController::class, 'first'])->name('services.first');
Route::get('/services/second', [ServiceDemoController::class, 'second'])->name('services.second');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
