<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/test', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});

Route::get('/', [\App\Http\Controllers\MainController::class, 'main']);
Route::get('/destinations', [\App\Http\Controllers\MainController::class, 'getUrlTitle']);
Route::get('/hotels', [\App\Http\Controllers\MainController::class, 'getUrlTitle']);
Route::get('/flights', [\App\Http\Controllers\MainController::class, 'getUrlTitle']);
Route::get('/bookings', [\App\Http\Controllers\MainController::class, 'getUrlTitle']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [\App\Http\Controllers\MainController::class, 'index'])->name('profile');
    Route::post('/email', [\App\Http\Controllers\MainController::class, 'email']);
});

require __DIR__.'/auth.php';
