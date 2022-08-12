<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\StaffController;
use Illuminate\Support\Facades\Route;


Route::withoutMiddleware(['auth', 'role:Super-Admin|Admin'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.login.show');
    });
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login.show');
    Route::post('/login', [AdminController::class, 'processLogin'])->name('admin.login.perform');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/blank', function () {
        return view('admin.blank');
    });
});

Route::group(['middleware' => ['role:Super-Admin|Admin']], function () {
    Route::get('/users', UserController::class . '@index')->name('users.index');
    Route::get('/users/create', UserController::class . '@create')->name('users.create');
    Route::post('/users/store', UserController::class . '@store')->name('users.store');
    Route::get('/users/{user}/show', UserController::class . '@show')->name('users.show');
    Route::get('/users/{user}/edit', UserController::class . '@edit')->name('users.edit');
    Route::put('/users/{user}/update', UserController::class . '@update')->name('users.update');
    Route::delete('/users/{user}/destroy', UserController::class . '@destroy')->name('users.destroy');

    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/{role}', [RoleController::class, 'show'])->name('roles.show');
    Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');

    Route::resource('permissions', PermissionController::class);
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::post('/permissions', [PermissionController::class, 'store'])->name('permissions.store');
    Route::get('/permissions/{permission}', [PermissionController::class, 'show'])->name('permissions.show');
    Route::get('/permissions/{id}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
    Route::put('/permissions/{id}', [PermissionController::class, 'update'])->name('permissions.update');
    Route::delete('/permissions/{id}', [PermissionController::class, 'destroy'])->name('permissions.destroy');


    Route::resource('/doctor',DoctorController::class);
    Route::resource('/staff',StaffController::class);
    Route::resource('/hospital',HospitalController::class);
    Route::resource('/department',DepartmentController::class);

    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout.perform');

});
