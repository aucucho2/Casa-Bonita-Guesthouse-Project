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

Route::get('/', function () {
  return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/booknow', function () {
    return view('pages.booknow');
});

Route::get('/room', function () {
    return view('pages.rooms');
});

Route::get('/contacts', function () {
    return view('pages.contacts');
});

Route::get('/home', function () {
    return view('pages.index');
});

Route::get('/reservation', function () {
    return view('pages.booknow');
});

Route::get('/refund', function () {
    return view('pages.refund');
});

Route::get('/gallery', function () {
    return view('pages.index');
});

Route::view('/availability-form','availability-form')->name('availability-form');

Route::post('/availability-checked', [\App\Http\Controllers\HomeController::class,'send'])->name('send.email');