<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\User\BookingController;
use Illuminate\Support\Facades\Route;


// Đăng nhập
Route::get('dang-nhap', [LoginController::class, 'login'])->name('login');
Route::post('dang-nhap/xu-ly-dang-nhap', [LoginController::class, 'handle_login']);

// Đăng ký
Route::get('dang-ky', [LoginController::class, 'register'])->name('register');
Route::post('dang-ky/xu-ly-dang-ky', [LoginController::class, 'handle_register']);

// Đăng xuất
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// Truy cập admin
Route::middleware(['auth', 'admin.access'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [MainController::class, 'income'])->name('admin');
        Route::get('main', [MainController::class, 'income']);

        # Điểm đến
        Route::prefix('destinations')->group(function () {
            Route::get('add-destination', [DestinationController::class, 'addDes']);
            Route::post('add-destination', [DestinationController::class, 'handle']);
            Route::get('list-destination', [DestinationController::class, 'listDes']);
            Route::get('edit/{destination}', [DestinationController::class, 'editDes']);
            Route::post('edit/{destination}', [DestinationController::class, 'updateDes']);
            Route::DELETE('delDestination', [DestinationController::class, 'delDes']);
            Route::get('/{id}/{url}', [DestinationController::class, 'getTourfromDes']);
        });

        # Tours
        Route::prefix('tours')->group(function () {
            Route::get('add-tour', [TourController::class, 'addTour']);
            Route::post('add-tour', [TourController::class, 'handle']);
            Route::get('list-tour', [TourController::class, 'listTour']);
            Route::get('edit-tour/{tour}', [TourController::class, 'editTour']);
            Route::post('edit-tour/{tour}', [TourController::class, 'updateTour']);
            Route::DELETE('delTour', [TourController::class, 'delTour']);
            Route::get('/id-{id}/{url}', [TourController::class, 'detail'])->name('detailTour');
            Route::get('add-programe/{id}', [TourController::class, 'addPrograme']);
            Route::post('add-programe/{id}', [TourController::class, 'create']);
            Route::get('edit-programe/{programe}', [TourController::class, 'editPrograme']);
            Route::post('edit-programe/{programe}', [TourController::class, 'updatePrograme']);
        });

        # Schedules
        Route::prefix('schedules')->group(function () {
            Route::get('add-schedule', [ScheduleController::class, 'addSchedule']);
            Route::post('add-schedule', [ScheduleController::class, 'store']);
            Route::get('list-schedule', [ScheduleController::class, 'listSchedule']);
            Route::get('edit-schedule/{schedule}', [ScheduleController::class, 'editSchedule']);
            Route::post('edit-schedule/{schedule}', [ScheduleController::class, 'updateSchedule']);
            Route::DELETE('delSchedule', [ScheduleController::class, 'delSchedule']);
            Route::get('/id={id}/{url}', [ScheduleController::class, 'detail']);
        });

        # Users
        Route::prefix('users')->group(function () {
            Route::get('add-user', [LoginController::class, 'addUserByAdmin']);
            Route::post('add-user', [LoginController::class, 'handle_register']);
            Route::get('list-user', [UserController::class, 'listUser']);
            Route::get('edit/{user}', [UserController::class, 'editUser']);
            Route::post('edit/{user}', [UserController::class, 'updateUser']);
            Route::DELETE('delUser', [UserController::class, 'delUser']);
        });

        # Dashboard
        Route::prefix('dashboard')->group(function () {
            Route::get('/', [MainController::class, 'income'])->name('doanhthu');
            Route::post('/handle-income', [MainController::class, 'handleIncome']);
            Route::get('/number-tour', [MainController::class, 'numberTour'])->name('tour');
            Route::post('/handle-tour', [MainController::class, 'handleTour']);
        });

        # Order
        Route::prefix('order')->group(function(){
            Route::get('/list-order',[OrderController::class,'index']);
            Route::get('/list-user/{id}/{departure}', [OrderController::class, 'listUser']);
        });

        # Upload img
        Route::post('upload/services', [UploadController::class, 'store']);
    });

});


// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/trang-chu', [HomeController::class, 'index']);
Route::get('/gioi-thieu', [HomeController::class, 'about']);

// Điểm đến (Destination)
Route::prefix('diem-den')->group(function () {
    Route::get('/', [\App\Http\Controllers\User\DestinationController::class, 'allDes'])->name('destination');
    Route::get('/trong-nuoc', [\App\Http\Controllers\User\DestinationController::class, 'inVN']);
    Route::get('/nuoc-ngoai', [\App\Http\Controllers\User\DestinationController::class, 'otherCountry']);
    Route::get('/{id}/{url}', [\App\Http\Controllers\User\DestinationController::class, 'index']);
});

// Tour
Route::prefix('tour')->group(function () {
    Route::get('/', [\App\Http\Controllers\User\TourController::class, 'allTour'])->name('allTour');
    Route::get('/id-{id}/{url}', [\App\Http\Controllers\User\TourController::class, 'detail']);

    # Handle Comment
    Route::post('load-comment',[\App\Http\Controllers\User\TourController::class,'load_comment']);
    Route::post('add-comment', [\App\Http\Controllers\User\TourController::class, 'add_comment']);
});

// Đặt tour
Route::prefix('/dat-tour')->group(function () {
    Route::get('/idtour={id}/{url}', [BookingController::class, 'booking']);
    Route::post('/idtour={id}/{url}', [BookingController::class, 'addBill']);
});



