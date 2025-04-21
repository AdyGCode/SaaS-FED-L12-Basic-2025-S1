<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\StaticPageController;

use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPageController::class, 'index'])->name('home');
Route::get('/', [StaticPageController::class, 'about'])->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/sports', SportController::class)
    ->only(['index', 'show', 'store', 'create',]);

//Route::get('/sports/create', [App\Http\Controllers\SportController::class, 'create'])->name('create');
//Route::post('/sports', [App\Http\Controllers\SportController::class, 'store'])->name('store');
//Route::get('/sports', [App\Http\Controllers\SportController::class, 'show'])->name('show');

require __DIR__ . '/auth.php';
