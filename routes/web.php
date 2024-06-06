<?php

use App\Http\Controllers\Auth\ExpiredPasswordController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('password.expired');
    Route::get('password/expired', [ExpiredPasswordController::class, 'index'])->name('password.expired');
    Route::post('password/expired', [ExpiredPasswordController::class, 'store']);
});
