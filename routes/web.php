<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontpageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontpageController::class, 'getMovies']);

Route::get('frontpage', [FrontpageController::class, 'getMovies'])->name('frontpage');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user-test', function () {
    return view('user-test');
})->middleware(['auth', 'verified'])->name('user-test');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/commenthistory', function () {
    return view('commenthistory');
});

require __DIR__ . '/auth.php';
