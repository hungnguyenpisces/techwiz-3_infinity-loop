<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckOutHistoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HealthIndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicinePillController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['auth', 'role:Super-Admin|Admin'])->group(function () {
    require_once __DIR__ . '/admin.php';
});

Route::get('/register', [AuthController::class, 'register'])->name('register.show');
Route::post('/register', [AuthController::class, 'processRegister'])->name('register.perform');

Route::get('/login', [AuthController::class, 'login'])->name('login.show');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.perform');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/doctor', [HomeController::class, 'doctor'])->name('doctor');
Route::get('/contactus', [HomeController::class, 'contact_us'])->name('contactus');
Route::get('/user-chart', [HomeController::class, 'chart'])->name('chart');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/timetable', [HomeController::class, 'time_table'])->name('timetable');
    Route::get('/projectdetail', [HomeController::class, 'project_detail'])->name('projectdetail');
    Route::get('/servicedetail', [HomeController::class, 'service_detail'])->name('servicedetail');
    Route::get('/doctordetail', [HomeController::class, 'doctor_detail'])->name('doctordetail');

    Route::resource('/medicine', MedicinePillController::class);
    Route::resource('/comment', CommentController::class);

    Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('/appointment/{id}', [AppointmentController::class, 'show'])->name('appointment.show');
    Route::get('/appointment/{id}/edit', [AppointmentController::class, 'edit'])->name('appointment.edit');
    Route::put('/appointment/{id}', [AppointmentController::class, 'update'])->name('appointment.update');
    Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

    Route::get('/user-history', [CheckOutHistoryController::class, 'index'])->name('checkout.index');
    Route::get('/user-appointment', [AppointmentController::class, 'show'])->name('appointment.show');


    Route::get('/user', [HealthIndexController::class, 'index'])->name('user.index');
    Route::post('/user', [HealthIndexController::class, 'store'])->name('user.store');
    Route::get('/user/{id}', [HealthIndexController::class, 'show'])->name('user.show');
    Route::get('/user/{id}/edit', [HealthIndexController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [HealthIndexController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [HealthIndexController::class, 'destroy'])->name('user.destroy');


    Route::get('/logout', [AuthController::class, 'logout'])->name('logout.perform');
});

Route::get('/hospital', function () {
    return view('web.hospital');
});

Route::get('/hospital-search', function () {
    return view('web.hospital-search');
});

Route::get('/doctor', function () {
    return view('web.doctor');
});

Route::get('/doctor-detail', function () {
    return view('web.doctor-detail');
});

Route::get('/doctor-search', function () {
    return view('web.doctor-search');
});

Route::get('/user-bmi', function () {
    return view('user.user-bmi');
});

Route::get('/user-health', function () {
    return view('user.user-health');
});

Route::get('/user-update', function () {
    return view('user.user-update');
});

Route::get('/departments', function () {
    return view('web.departments');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/403', function () {
    return view('403');
});
