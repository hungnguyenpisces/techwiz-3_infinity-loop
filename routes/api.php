<?php

use App\Http\Controllers\Api\AdminDashboardApiController;
use App\Http\Controllers\Api\DoctorScheduleController;
use App\Http\Controllers\Api\TokenController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api'], function () {
  Route::post('login', [TokenController::class, 'login']);
  Route::post('logout', [TokenController::class, 'logout']);
  Route::post('refresh', [TokenController::class, 'refresh']);
  Route::post('me', [TokenController::class, 'me']);
  Route::get('user/notifications', [UserApiController::class, 'getAllNotifications']);
});
Route::group(['middleware' => ['checkRole:Super-Admin,Admin,Staff']], function () {
  Route::get('/users', [AdminDashboardApiController::class, 'countPatientAndAppointment']);
  Route::get('users/notifications', [UserApiController::class, 'getAllNotifications']);
  Route::get('/doctor-schedule-calendar', [DoctorScheduleController::class, 'DoctorScheduleCalendar']);
  Route::get('/checkbox-data', [DoctorScheduleController::class, 'checkboxData']);
  //getHealthIndexChart
  Route::get('users/datachart', [UserApiController::class, 'getHealthIndexChart']);
});


Route::group(['middleware' => ['checkRole:Super-Admin,Admin,Staff,Patient,User']], function () {
    Route::get('user/notifications', [UserApiController::class, 'getNotificationsByUser']);
});

Route::group(['middleware' => ['checkRole:Patient, User']], function () {
    Route::get('users/datachart', [UserApiController::class, 'getHealthIndexChart']);
});