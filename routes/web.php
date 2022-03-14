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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about/index');
});

Route::get('/contact', function () {
    return view('contact/index');
});

Route::get('/catering', function () {
    return view('catering/index');
});

Route::get('/everyday', function () {
    return view('everyday/index');
});
