<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AppointmentManageController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\FaqController;
use Illuminate\Support\Facades\Route;


Route::withoutMiddleware(['role:Super-Admin|Admin|Staff'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.login.show');
    });
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login.show');
    Route::post('/login', [AdminController::class, 'processLogin'])->name('admin.login.perform');
});

Route::group(['middleware' => ['role:Super-Admin|Admin|Staff']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/users', UserController::class . '@index')->name('users.index');
    Route::get('/users/create', UserController::class . '@create')->name('users.create');
    Route::post('/users/store', UserController::class . '@store')->name('users.store');
    Route::get('/users/{user}/show', UserController::class . '@show')->name('users.show');
    Route::get('/users/{user}/edit', UserController::class . '@edit')->name('users.edit');
    Route::get('/users/{user}/block', UserController::class . '@block')->name('users.block');
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

    Route::get('/all-appointment', AppointmentManageController::class . '@index')->name('all-appointment.index');
    Route::get('/appointment', AppointmentManageController::class . '@create')->name('appointment.create');
    Route::get('/appointment/excessivecancels', AppointmentManageController::class . '@excessiveCancels')->name('admin.appointment.excancels');
    Route::get('/appointment/{id}/detail', AppointmentManageController::class . '@show')->name('admin.appointment.detail');
    Route::get('/appointment/{id}/edit', AppointmentManageController::class . '@edit')->name('admin.appointment.edit');
    Route::post('/appointment/{id}/approve', AppointmentManageController::class . '@approve')->name('admin.appointment.approve');
    Route::post('/appointment/{id}/reject', AppointmentManageController::class . '@reject')->name('admin.appointment.reject');
    Route::post('/appointment/{id}/update', AppointmentManageController::class . '@update')->name('admin.appointment.update');
    Route::post('/createAppointment', AppointmentManageController::class.'@createAppointment')->name('admin.createAppointment');

    Route::get('/doctor-schedule', AppointmentManageController::class . '@doctorSchedule')->name('admin.doctor.schedule');

    Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor.index');
    Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
    Route::get('/doctor/doctor-profile', [DoctorController::class, 'show'])->name('doctor.show');

    Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');
    Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
    Route::get('/patient/patient-profile', [PatientController::class, 'show'])->name('patient.show');

    Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
    Route::get('/payment/add-payment', [PaymentController::class, 'create'])->name('payment.create');
    Route::get('/payment/patient-invoice', [PaymentController::class, 'show'])->name('payment.show');

    Route::resource('/blog', BlogController::class);
    Route::post('/blog/upload', [BlogController::class, 'upload'])->name('blog.upload');
    Route::post('/blog/ck_upload', [BlogController::class, 'ck_upload'])->name('blog.ck_upload');
    Route::get('/faq', [FaqController::class, 'index'])->name('admin.faq.index');
    Route::get('/faq/add-faq', [FaqController::class, 'create'])->name('admin.faq.create');
    Route::get('/faq/{id}/edit-faq', [FaqController::class, 'edit'])->name('admin.faq.edit');
    Route::post('/faq', [FaqController::class, 'store'])->name('admin.faq.store');
    Route::post('/faq/update', [FaqController::class, 'update'])->name('admin.faq.update');

    Route::get('/report', function () {
        return view('admin.report');
    });
    Route::get('/widgets', function () {
        return view('admin.widgets');
    });

    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout.perform');
});
