<?php

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

<<<<<<< HEAD
//Route::get('/', function () {
    //return view('welcome');
//});
=======
date_default_timezone_set('Asia/Ho_Chi_Minh');
/**
 * Client routes
 */
Route::get('/', function () {
    return view('client.home');
})->name('home');
>>>>>>> 8df0a7e71a7081136b8c5f2c47463f8d1e06f37b

<<<<<<< HEAD
Route::get('/',[HomeController::class,'check']);
=======
Route::get('/1', function () {
    return view('client.auth.sign_in');
})->name('auth.sign_in');

Route::get('/2', function () {
    return view('client.auth.sign_up');
})->name('auth.sign_up');

Route::get('/3', function () {
    return view('client.booking.index');
})->name('booking.index');
Route::get('/4', function () {
    return view('client.booking.detail');
})->name('booking.detail');
Route::get('/5', function () {
    return view('client.user.booked_ticket');
})->name('user.booked');
Route::get('/6', function () {
    return view('client.user.booked_ticket_detail');
})->name('user.booked_detail');
Route::get('/7', function () {
    return view('client.user.profile');
})->name('user.profile');


>>>>>>> abdc8f3ab63bad56e08c6cb4f3527ae9904cb495

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');
Route::get('/user', function () {
    return view('user.home');
})->name('user');
Route::get('/khachhang', function () {
    return view('khachhang');
})->name('khachhang');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
