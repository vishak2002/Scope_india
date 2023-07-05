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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/registration', function () {
    return view('registeration');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/student dashboard', function () {
    return view('dashboard');
});
Route::get('/course', function () {
    return view('course');
});

Route::get('/change', function () {
    return view('change');
});