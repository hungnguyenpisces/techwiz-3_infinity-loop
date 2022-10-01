<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogViewController;
use App\Http\Controllers\CheckOutHistoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HealthIndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicinePillController;
use App\Http\Controllers\NotificationController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AppointmentManageController;


Route::prefix('admin')->middleware(['role:Super-Admin|Admin|Staff'])->group(function () {
  require_once __DIR__ . '/admin.php';
});

Route::get('/register', [AuthController::class, 'register'])->name('register.show');
Route::post('/register', [AuthController::class, 'processRegister'])->name('register.perform');
Route::get('/login', [AuthController::class, 'login'])->name('login.show');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.perform');
// Route::post('/refresh', [TokenController::class, 'refresh'])->name('refresh');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/hospital', [HomeController::class, 'hospital'])->name('hospital');
Route::get('/departments', [HomeController::class, 'departments'])->name('departments');
Route::get('/doctor', [HomeController::class, 'doctor'])->name('doctor');
Route::get('/doctor-search', [HomeController::class, 'doctorSearch'])->name('doctor-search');
Route::get('/doctor-search-result', [HomeController::class, 'searchDoctorRs'])->name('doctor-searchRs');
Route::get('/doctor-detail', [HomeController::class, 'doctorDetail'])->name('doctor-detail');
Route::get('/hospital-detail/{id}', [HomeController::class, 'hospitalDetail'])->name('hospital-detail');
Route::get('/feedback-done', [CommendController::class, 'feedbackDone'])->name('feedback-done');

Route::get('/blog', [BlogViewController::class, 'list_blogs'])->name('view_blogs.list');
Route::get('/blog/{id}', [BlogViewController::class, 'view_blog'])->name('view_blogs.view');
Route::get('/blog/tag/{id}', [BlogViewController::class, 'tags_lookup'])->name('view_blogs.tags_lookup');

Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');

Route::group(['middleware' => ['auth']], function () {


    Route::get('/change-password', [App\Http\Controllers\AuthController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [App\Http\Controllers\AuthController::class, 'updatePassword'])->name('update-password');


    Route::get('/timetable', [HomeController::class, 'time_table'])->name('timetable');
    Route::get('/projectdetail', [HomeController::class, 'project_detail'])->name('projectdetail');
    Route::get('/servicedetail', [HomeController::class, 'service_detail'])->name('servicedetail');
    Route::get('/doctordetail', [HomeController::class, 'doctor_detail'])->name('doctordetail');

    Route::resource('/medicine', MedicinePillController::class);
    
    Route::get('/feedback/{id}/{notif}/create', [CommentController::class,'create'])->name('feedback.create');
    Route::get('/feedback', [CommentController::class,'index'])->name('feedback.index');
    Route::post('/feedback', [CommentController::class,'store'])->name('feedback.store');

    Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('/appointment/{id}', [AppointmentController::class, 'show'])->name('appointment.show');
    Route::get('/appointment/{id}/edit', [AppointmentController::class, 'edit'])->name('appointment.edit');
    Route::put('/appointment/{id}', [AppointmentController::class, 'update'])->name('appointment.update');
    Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');
    Route::get('/user-appointment-detail/{id}', [AppointmentController::class, 'showDetail'])->name('appointment.detail');
    Route::get('/appointment-hiep/{id}', [AppointmentManageController::class, 'update'])->name('appointmentmanage.update');
  
  Route::post('/user-appointment-detail/{id}/{notif}', [NotificationController::class, 'isRead2']);
  Route::get('/user-update-info/{notif}', [NotificationController::class, 'isRead']);

    Route::get('/user-history', [CheckOutHistoryController::class, 'index'])->name('checkout.index');
    Route::get('/user-appointment', [AppointmentController::class, 'show'])->name('appointment.show');
    Route::get('/record-detail/{id}', [CheckOutHistoryController::class, 'showDetail'])->name('record.detail');
    Route::delete('/record-detail/{id}', [CheckOutHistoryController::class, 'destroy'])->name('record.destroy');
  Route::get('/user-health/{notif}',[NotificationController::class, 'isRead2']);

    Route::get('/user', [HealthIndexController::class, 'index'])->name('user.index');
    Route::post('/user', [HealthIndexController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [HealthIndexController::class, 'edit'])->name('healthIndex.edit');
    Route::put('/user/{id}', [HealthIndexController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [HealthIndexController::class, 'destroy'])->name('user.destroy');
    Route::get('/user-bmi', [HealthIndexController::class, 'bmi'])->name('user.bmi');
    Route::get('/user-health', [HealthIndexController::class, 'health'])->name('user.health');
    Route::post('/user-health', [HealthIndexController::class, 'store'])->name('healthIndex.store');
    Route::get('/user-update-info', [HealthIndexController::class, 'updateInfo'])->name('user.updateInfo');

    Route::get('/user-health-list', [HealthIndexController::class, 'healthList'])->name('user.healthList');

  
  Route::get('/logout', [AuthController::class, 'logout'])->name('logout.perform');
});

Route::get('/404', function () {
  return view('404');
});

Route::get('/403', function () {
  return view('403');
});
