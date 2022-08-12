<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['auth', 'role:Super-Admin|Admin'])->group(function () {
    require_once __DIR__ . '/admin.php';
});

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::group(['middleware' => ['guest']], function () {
    /**
     * Register Routes
     */
    Route::get('/register', [AuthController::class, 'register'])->name('register.show');
    Route::post('/register', [AuthController::class, 'processRegister'])->name('register.perform');

    /**
     * Login Routes
     */
    Route::get('/login', [AuthController::class, 'login'])->name('login.show');
    Route::post('/login', [AuthController::class, 'processLogin'])->name('login.perform');
});

Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Routes
     */
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout.perform');
});

Route::get('/hospitalsearch',function (){
    return view('web.hospital-search');
});

Route::get('/user-bmi',function (){
    return view('user.user-bmi');
});

Route::get('/user-history',function (){
    return view('user.user-history');
});


Route::get('/user',function (){
    return view('user.user-profile');
});


Route::get('/user-health-profile',function (){
    return view('user.user-health-profile');
});


Route::get('/user-chart', [HomeController::class, 'chart'])->name('chart');

