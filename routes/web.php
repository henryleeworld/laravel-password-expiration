<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\ExpiredPasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::redirect('/', '/login');
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/home', [HomeController::class, 'index'])->name('admin.home')->middleware('password.expired');
    Route::get('password/expired', [ExpiredPasswordController::class, 'index'])->name('password.expired');
    Route::post('password/expired', [ExpiredPasswordController::class, 'store']);
});
