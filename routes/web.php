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




Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/doctor', [HomeController::class, 'doctor'])->name('doctor');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contactus', [HomeController::class, 'contact_us'])->name('contactus');
Route::resource('/checkouthistory', CheckOutHistoryController::class);

Route::get('/register', [AuthController::class, 'register'])->name('register.show');
Route::post('/register', [AuthController::class, 'processRegister'])->name('register.perform');

Route::get('/login', [AuthController::class, 'login'])->name('login.show');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.perform');

Route::get('/404', function () {
    return view('404');
});

Route::get('/403', function () {
    return view('403');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/timetable', [HomeController::class, 'time_table'])->name('timetable');
    Route::get('/projectdetail', [HomeController::class, 'project_detail'])->name('projectdetail');
    Route::get('/servicedetail', [HomeController::class, 'service_detail'])->name('servicedetail');
    Route::get('/doctordetail', [HomeController::class, 'doctor_detail'])->name('doctordetail');
    Route::get('/blogdetail', [HomeController::class, 'blog_detail'])->name('blogdetail');
    Route::resource('/medicine', MedicinePillController::class);
    Route::resource('/healthindex', HealthIndexController::class);

    // Route::resource('/appointment', AppointmentController::class);
    Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('/appointment/{id}', [AppointmentController::class, 'show'])->name('appointment.show');
    Route::get('/appointment/{id}/edit', [AppointmentController::class, 'edit'])->name('appointment.edit');
    Route::put('/appointment/{id}', [AppointmentController::class, 'update'])->name('appointment.update');
    Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

    Route::resource('/comment', CommentController::class);


    Route::get('/logout', [AuthController::class, 'logout'])->name('logout.perform');
});

Route::get('/hospitalsearch', function () {
    return view('web.hospital-search');
});


Route::get('/test', function () {
    return view('web.home');
});

Route::get('/user-bmi', function () {
    return view('user.user-bmi');
});

Route::get('/user-history', function () {
    return view('web.home');
});

Route::get('/user-chart', [HomeController::class, 'chart'])->name('chart');

Route::get('/user-profile', function () {
    return view('user.user-profile');
});

Route::get('/user-history', function () {
    return view('user.user-history');
});