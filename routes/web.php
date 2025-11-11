<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// contoh route lain
Route::get('/about', function () {
    return view('about');
})->name('about');

use App\Http\Controllers\ProjectController;

Route::get('/portfolio', [ProjectController::class, 'index'])->name('portfolio');

use App\Http\Controllers\ContactController;

// pastikan route portfolio ada (jika belum)
// Route::get('/portfolio', [ProjectController::class, 'index'])->name('portfolio');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/portfolio', [ProjectController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [ProjectController::class, 'show'])->name('portfolio.show');
