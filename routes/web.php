<?php

use App\Http\Controllers\ClientAuthController;
use App\Http\Controllers\ClientBookingController;
use App\Http\Controllers\ClientHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
//return view('welcome');
//});
date_default_timezone_set('Asia/Ho_Chi_Minh');
/**
 * Client routes
 */
Route::get('/', [ClientHomeController::class, 'index'])->name('home');

Route::get('/1', function () {
    return view('client.auth.sign_in');
})->name('auth.sign_in');

Route::get('/signUp', [ClientAuthController::class, 'signUpGet'])->name('auth.sign_up');

Route::get('/booking', [ClientBookingController::class, 'index'])->name('booking.index');
Route::get('/booking/detail', [ClientBookingController::class, 'detail'])->name('booking.detail');
Route::post('/booking/create', [ClientBookingController::class, 'create'])->name('booking.create');

Route::get('/5', function () {
    return view('client.user.booked_ticket');
})->name('user.booked');
Route::get('/6', function () {
    return view('client.user.booked_ticket_detail');
})->name('user.booked_detail');
Route::get('/7', function () {
    return view('client.user.profile');
})->name('user.profile');


Route::get('/check', [HomeController::class, 'check']);

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');
Route::get('/user', function () {
    return view('user.home');
})->name('user');
//Route::get('/khachhang', function () {
//return view('khachhang');
//})->name('khachhang');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
