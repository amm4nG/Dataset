<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContributeDatasetController;
use App\Http\Controllers\MyDatasetController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('datasets', function () {
    return view('datasets');
});

Route::get('detail', function () {
    return view('detail');
});

Route::get('login', [AuthController::class, 'index'])
    ->name('login')
    ->middleware('guest');
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('login/validation', [AuthController::class, 'validation']);

Route::get('register', [RegistrationController::class, 'index'])->middleware('guest');
Route::post('register/user', [RegistrationController::class, 'store']);

Route::get('donation', [ContributeDatasetController::class, 'index'])->middleware('auth');
Route::post('more/info', [ContributeDatasetController::class, 'moreInfo'])->middleware('auth');
Route::post('donation/store', [ContributeDatasetController::class, 'store'])->middleware('auth');
Route::get('my/dataset', [MyDatasetController::class, 'index'])->middleware('auth');

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('admin/manage/datasets', function () {
        return view('admin.manage-datasets');
    });

    Route::get('admin/manage/users', function () {
        return view('admin.manage-users');
    });

    Route::get('admin/detail/dataset', function () {
        return view('admin.detail-dataset');
    });
});

Route::get('forgot', function () {
    return view('forgot');
});

Route::get('donation/paper', function () {
    return view('donation-paper');
});

Route::get('contact/information', function () {
    return view('contact-information');
});
Route::get('about', function () {
    return view('about');
});
