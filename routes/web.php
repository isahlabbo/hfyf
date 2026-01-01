<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// News listing and detail pages
Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/{slug}', [NewsController::class, 'show'])->name('news.show');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/jobs.php';
