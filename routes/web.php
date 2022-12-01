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

/**
 * Client routes
 */
Route::get('/', function () {
    return view('client.home');
})->name('home');

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



/**
 * Admin routes
 */
Route::get('/admin', function () {
    return view('admin.home');
})->name('admin.home');
