<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['App\Http\Middleware\Authenticate'])->group(function () {
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    Route::middleware(['App\Http\Middleware\CheckAdmin'])->group(function () {
        Route::get('/admin', function () {
            // Chỉ các admin mới có thể truy cập route này
        });
    });
});
