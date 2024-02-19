<?php

use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\ProfileController as Profile;

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
Route::get('/', [Home::class, 'index'])->name('home');
Route::GET('/weather/fetch', [Home::class, 'fetchWeather'])->name('home.fetchWeather');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Profile::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Profile::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Profile::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
