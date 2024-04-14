<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAdminController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckAdmin;

Route::get('/', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([Authenticate::class])->group(function () {
    Route::middleware([CheckAdmin::class])->group(function () {
        Route::get('/admin/users', [UserAdminController::class, 'index'])->name('admin.users.index');;
        Route::get('/admin/users/{id}/edit', [UserAdminController::class, 'edit'])->name('admin.users.edit');
        Route::put('/admin/users/{id}', [UserAdminController::class, 'update'])->name('admin.users.update');
        Route::delete('/admin/users/{id}', [UserAdminController::class, 'destroy'])->name('admin.users.destroy');
    });
});

