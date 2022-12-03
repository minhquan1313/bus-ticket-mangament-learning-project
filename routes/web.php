<?php

use App\Http\Controllers\ClientAuthController;
use App\Http\Controllers\ClientBookingController;
use App\Http\Controllers\ClientHomeController;
use App\Http\Controllers\ClientUserController;
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

date_default_timezone_set('Asia/Ho_Chi_Minh');
/**
 * Client routes
 */
Route::get('/', [ClientHomeController::class, 'index'])->name('home');

Route::get('/signIn', [ClientAuthController::class, 'signInGet'])->name('auth.sign_in');

Route::get('/signUp', [ClientAuthController::class, 'signUpGet'])->name('auth.sign_up');

Route::get('/booking', [ClientBookingController::class, 'index'])->name('booking.index');
Route::get('/booking/detail/{chuyen_id}', [ClientBookingController::class, 'detail'])->name('booking.detail');
Route::post('/booking', [ClientBookingController::class, 'create'])->name('booking.create')->middleware('auth');

Route::get('/profile', [ClientAuthController::class, 'profileGet'])->name('user.profile')->middleware('auth');
Route::post('/profile', [ClientAuthController::class, 'profilePost'])->middleware('auth');
Route::post('/profile/logout', [ClientAuthController::class, 'logOut'])->name('user.logout')->middleware('auth');

Route::get('/profile/booked', [ClientUserController::class, 'booked'])->name('user.booked')->middleware('auth');
Route::get('/profile/booked/{ve_id}', [ClientUserController::class, 'bookedDetail'])->name('user.booked_detail')->middleware('auth');
Route::put('/profile/booked/cancel/{ve_id}', [ClientUserController::class, 'bookCancel'])->name('user.booked_cancel')->middleware('auth');


/**
 * Admin routes
 */

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
