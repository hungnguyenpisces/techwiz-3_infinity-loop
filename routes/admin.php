<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::withoutMiddleware(['auth', 'role:Super-Admin|Admin'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.login.show');
    });
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login.show');
    Route::post('/login', [AdminController::class, 'processLogin'])->name('admin.login.perform');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::group(['middleware' => ['role:Super-Admin|Admin']], function () {
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    // Route::resource('permissions', PermissionController::class);
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout.perform');
});