<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\GeneralController;
use App\Http\Controllers\Front\Auth\AuthController;
use App\Http\Controllers\Front\Dashboard\DashboardController;
use App\Http\Controllers\Front\Business\BusinessController;

Route::get('/', function (){ return redirect(app()->getLocale()); });

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setLocale')->group(function (){
    Route::get('/', [GeneralController::class, 'index'])->name('index');
    Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');

    Route::prefix('auth')->middleware('guest:web')->group(function () {
        Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
        Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
        Route::get('/reset_password', [AuthController::class, 'reset_password'])->name('auth.reset_password');

        Route::post('/loginPost', [AuthController::class, 'loginPost'])->name('auth.login.post')->middleware('throttle:3,1');
        Route::post('/registerPost', [AuthController::class, 'registerPost'])->name('auth.register.post')->middleware('throttle:3,1');
        Route::post('/reset_password_post', [AuthController::class, 'reset_password_post'])->name('auth.reset_password.post')->middleware('throttle:3,1');
    });

    Route::prefix('dashboard')->middleware('auth:sanctum')->group(function (){
        Route::get('/main', [DashboardController::class, 'main'])->name('dashboard.main');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('dashboard.logout');

        Route::resource('/business', BusinessController::class);
    });
});
