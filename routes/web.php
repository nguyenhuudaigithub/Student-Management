<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAdminController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckAdmin;
use App\Http\Controllers\Admin\BlogsController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
});

Route::get('/', function () {
    return view('home');
})->name('');

Route::get('/blogs', ['App\Http\Controllers\User\BlogsController', 'index']);
Route::get('/blogs/{slug}', ['App\Http\Controllers\User\BlogsController', 'viewBlog']);

// Route::middleware([Authenticate::class])->group(function () {
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::middleware([CheckAdmin::class])->group(function () {

        // Quản lý người dùng
        Route::get('/admin/users', [UserAdminController::class, 'index'])->name('admin.users.index');
        Route::get('/admin/users/{id}/edit', [UserAdminController::class, 'edit'])->name('admin.users.edit');
        Route::put('/admin/users/{id}', [UserAdminController::class, 'update'])->name('admin.users.update');
        Route::delete('/admin/users/{id}', [UserAdminController::class, 'destroy'])->name('admin.users.destroy');

        // Bài viết
        Route::get('/admin/blogs', [BlogsController::class, 'index'])->name('admin.blogs.index');;
        Route::get('/admin/blogs/create', [BlogsController::class, 'create'])->name('admin.blogs.create');
        Route::post('/admin/blogs/store', [BlogsController::class, 'store'])->name('admin.blogs.store');
        Route::get('admin/blogs/edit/{id}', [BlogsController::class, 'edit'])->name('admin.blogs.edit');
        Route::put('admin/blogs/update/{id}', [BlogsController::class, 'update'])->name('admin.blogs.update');
        Route::delete('admin/blogs/delete/{id}', [BlogsController::class, 'destroy'])->name('admin.blogs.delete');
    });
});
