<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'main']);
Route::get('/destinations', [MainController::class, 'getUrlTitle']);
Route::get('/hotels', [MainController::class, 'getUrlTitle']);
Route::get('/flights', [MainController::class, 'getUrlTitle']);
Route::get('/bookings', [MainController::class, 'getUrlTitle']);
Route::get('/list', [MainController::class, 'list']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [MainController::class, 'index'])->name('profile');
    Route::post('/email', [MainController::class, 'email']);
});

require __DIR__.'/auth.php';
