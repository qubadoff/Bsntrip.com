<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CountryAndCity\Countries;
use App\Http\Controllers\Admin\CountryAndCity\Cities;
use App\Http\Controllers\Admin\Settings\SettingsController;



Route::prefix('admin')->group(function (){

    Route::prefix('auth')->group(function (){
        Route::get('/login', [AdminAuthController::class, 'login'])->name('admin.login');
        Route::post('/login/post', [AdminAuthController::class, 'loginPost'])->name('admin.login.post');
    });

    Route::prefix('dashboard')->middleware('checkAdmin')->group(function (){
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

        //Settings route
        Route::resource('/settings', SettingsController::class);

        //Countries and Cities
        Route::resource('/countries', Countries::class);
        Route::resource('/cities', Cities::class);

    });
});

