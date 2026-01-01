<?php
// routes/jobs.php
use App\Http\Controllers\JobOpeningController;
use Illuminate\Support\Facades\Route;

Route::name('job.')
->prefix('/job')
->group(function () {
    Route::get('/', [JobOpeningController::class, 'index'])->name('index');   
    Route::get('/{slug}', [JobOpeningController::class, 'show'])->name('show');
});
