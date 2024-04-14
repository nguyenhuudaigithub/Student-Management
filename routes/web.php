<?php

use App\Models\Department;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAdminController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckAdmin;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\coursesController;

Route::get('/', function () {
    return view('welcome');
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
Route::controller(DepartmentController::class)->group(function () {
    Route::get('department/list', 'department')->middleware('auth')->name('department/list'); // list student
    Route::get('department/add/page', 'departmentAdd')->middleware('auth')->name('department/add/page'); // page student
    Route::post('department/add/save', 'departmentSave')->name('department/add/save'); // save record student
    Route::get('department/edit/{id}', 'departmentEdit'); // view for edit
    Route::post('department/update', 'departmentUpdate')->name('department/update'); // update record student
    Route::post('department/delete', 'delete')->name('department.delete');
    Route::resource('department','DepartmentController');
});


Route::get('/blogs', ['App\Http\Controllers\User\BlogsController', 'index']);
Route::get('/blogs/{slug}', ['App\Http\Controllers\User\BlogsController', 'viewBlog']);

Route::middleware([Authenticate::class])->group(function () {
    Route::middleware([CheckAdmin::class])->group(function () {

        // Quản lý người dùng
        Route::get('/users', [UserAdminController::class, 'index'])->name('admin.users.index');
        Route::get('/users/{id}/edit', [UserAdminController::class, 'edit'])->name('admin.users.edit');
        Route::put('/users/{id}', [UserAdminController::class, 'update'])->name('admin.users.update');
        Route::delete('/users/{id}', [UserAdminController::class, 'destroy'])->name('admin.users.destroy');

        // Bài viết
        Route::get('/blogs', [BlogsController::class, 'index'])->name('admin.blogs.index');;
        Route::get('/blogs/create', [BlogsController::class, 'create'])->name('admin.blogs.create');
        Route::post('/blogs/store', [BlogsController::class, 'store'])->name('admin.blogs.store');
        Route::get('blogs/edit/{id}', [BlogsController::class, 'edit'])->name('admin.blogs.edit');
        Route::put('blogs/update/{id}', [BlogsController::class, 'update'])->name('admin.blogs.update');
        Route::delete('blogs/delete/{id}', [BlogsController::class, 'destroy'])->name('admin.blogs.delete');

            // khoá học

        Route::get('/courses', [coursesController::class, 'index'])->name('admin.courses.index');
        Route::get('/courses/create', [coursesController::class, 'create'])->name('admin.courses.create');
        Route::post('/courses/store', [coursesController::class, 'store'])->name('admin.courses.store');
        Route::get('courses/edit/{id}', [coursesController::class, 'edit'])->name('admin.courses.edit');
        Route::put('courses/update/{id}', [coursesController::class, 'update'])->name('admin.courses.update');
        Route::delete('courses/delete/{id}', [coursesController::class, 'destroy'])->name('admin.courses.delete');



    });
});
