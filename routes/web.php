<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/home', 'App\Http\Controllers\Admin\HomeController@index')->name('admin.home')->middleware('password.expired');
    Route::get('password/expired', 'App\Http\Controllers\Auth\ExpiredPasswordController@index')->name('password.expired');
    Route::post('password/expired', 'App\Http\Controllers\Auth\ExpiredPasswordController@store');
});
