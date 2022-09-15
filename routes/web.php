<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\TokenController;

use App\Http\Controllers\CheckOutHistoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HealthIndexController;
use App\Http\Controllers\HomeController;
// use UserController
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\MedicinePillController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['role:Super-Admin|Admin'])->group(function () {
    require_once __DIR__ . '/admin.php';
});

Route::get('/register', [AuthController::class, 'register'])->name('register.show');
Route::post('/register', [AuthController::class, 'processRegister'])->name('register.perform');
Route::get('/login', [UserController::class, 'login'])->name('login.show');
Route::post('/login', [UserController::class, 'processLogin'])->name('login.perform');
// Route::post('/refresh', [TokenController::class, 'refresh'])->name('refresh');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/hospital', [HomeController::class, 'hospital'])->name('hospital');
Route::get('/hospital-search', [HomeController::class, 'searchHospitalRs'])->name('hospital-searchRs');
Route::get('/departments', [HomeController::class, 'departments'])->name('departments');
Route::get('/doctor', [HomeController::class, 'doctor'])->name('doctor');
Route::get('/doctor-search', [HomeController::class, 'searchDoctorRs'])->name('doctor-searchRs');
// Route::get('/doctor-search-result', [HomeController::class, 'searchDoctorRs'])->name('doctor-searchRs');
Route::get('/doctor-detail', [HomeController::class, 'doctorDetail'])->name('doctor-detail');

Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');

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
    Route::get('/user-appointment-detail/{id}', [AppointmentController::class, 'showDetail'])->name('appointment.detail');

    Route::get('/user-history', [CheckOutHistoryController::class, 'index'])->name('checkout.index');
    Route::get('/user-appointment', [AppointmentController::class, 'show'])->name('appointment.show');
    Route::get('/record-detail/{id}', [CheckOutHistoryController::class, 'showDetail'])->name('record.detail');

    Route::get('/user', [HealthIndexController::class, 'index'])->name('user.index');
    Route::post('/user', [HealthIndexController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [HealthIndexController::class, 'edit'])->name('healthIndex.edit');
    Route::put('/user/{id}', [HealthIndexController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [HealthIndexController::class, 'destroy'])->name('user.destroy');
    Route::get('/user-bmi', [HealthIndexController::class, 'bmi'])->name('user.bmi');
    Route::get('/user-health', [HealthIndexController::class, 'health'])->name('user.health');
    Route::get('/user-update-info', [HealthIndexController::class, 'updateInfo'])->name('user.updateInfo');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout.perform');
});


Route::get('/404', function () {
    return view('404');
});

Route::get('/403', function () {
    return view('403');
});
