<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->prefix('login')->group(function(){

    Route::get('/', [LoginController::class, 'index'])->name('login');

    Route::post('/', [LoginController::class, 'login'])->name('login.login');

});

Route::prefix('logout')->group(function(){

    Route::get('/', [LogoutController::class, 'index'])->name('logout.index');

    Route::post('/', [LogoutController::class, 'logout'])->name('logout.login');

});

Route::middleware('auth')->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});

