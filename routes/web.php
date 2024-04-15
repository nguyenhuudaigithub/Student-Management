


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAdminController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckAdmin;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\DepartmentController;

// home
Route::get('/', function () {
    return view('home');
})->name('');



Route::get('/courses', ['App\Http\Controllers\User\coursesController', 'index']);
Route::get('/courses/{slug}', ['App\Http\Controllers\User\coursesController', 'viewBlog']);

// blog user routes
Route::get('/blogs', ['App\Http\Controllers\User\BlogsController', 'index']);
Route::get('/blogs/{slug}', ['App\Http\Controllers\User\BlogsController', 'viewBlog']);

// Route::middleware([Authenticate::class])->group(function () {
    // login
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //  isAdmin true
    Route::middleware([CheckAdmin::class])->group(function () {
        Route::get('/ad', function () {
            return view('admin.layouts.layout');
        })->name('admin.dashboard');

        // Quản lý người dùng
        Route::get('/admin/users', [UserAdminController::class, 'index'])->name('admin.users.index');
        Route::get('/admin/users/{id}/edit', [UserAdminController::class, 'edit'])->name('admin.users.edit');
        Route::put('/admin/users/{id}', [UserAdminController::class, 'update'])->name('admin.users.update');
        Route::delete('/admin/users/{id}', [UserAdminController::class, 'destroy'])->name('admin.users.destroy');
        //Khoa
        Route::controller(DepartmentController::class)->group(function () {
            Route::get('admin/department/list', 'department')->name('admin/department/list'); // list student
            Route::get('admin/department/add/page', 'departmentAdd')->name('admin/department/add/page'); // page student
            Route::post('admin/department/add/save', 'departmentSave')->name('admin/department/add/save'); // save record student
            Route::get('admin/department/edit/{id}', 'departmentEdit'); // view for edit
            Route::post('admin/department/update', 'departmentUpdate')->name('admin/department/update'); // update record student
            Route::post('admin/department/delete', 'delete')->name('admin/department.delete');
            Route::resource('admin/department', 'DepartmentController');
        });


        //Khoá học
        Route::get('/admin/courses', [coursesController::class, 'index'])->name('admin.courses.index');;
        Route::get('/admin/courses/create', [coursesController::class, 'create'])->name('admin.courses.create');
        Route::post('/admin/courses/store', [coursesController::class, 'store'])->name('admin.courses.store');
        Route::get('admin/courses/edit/{id}', [coursesController::class, 'edit'])->name('admin.courses.edit');
        Route::put('admin/courses/update/{id}', [coursesController::class, 'update'])->name('admin.courses.update');
        Route::delete('admin/courses/delete/{id}', [coursesController::class, 'destroy'])->name('admin.courses.delete');

         // Bài viết
        Route::get('/admin/blogs', [BlogsController::class, 'index'])->name('admin.blogs.index');;
        Route::get('/admin/blogs/create', [BlogsController::class, 'create'])->name('admin.blogs.create');
        Route::post('/admin/blogs/store', [BlogsController::class, 'store'])->name('admin.blogs.store');
        Route::get('admin/blogs/edit/{id}', [BlogsController::class, 'edit'])->name('admin.blogs.edit');
        Route::put('admin/blogs/update/{id}', [BlogsController::class, 'update'])->name('admin.blogs.update');
        Route::delete('admin/blogs/delete/{id}', [BlogsController::class, 'destroy'])->name('admin.blogs.delete');
    });

    //Danh sách khoá học (người dùng xem)
    Route::get('user/courses', [coursesController::class, 'indexUser'])->name('admin.courses.view');;

});
