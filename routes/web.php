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

Route::get('/culture', function () {
    return view('culture');
});

Route::get('/tourism', function () {
    return view('tourism');
});

Route::get('/tradisionaldance', function () {
    return view('tradisional');
});

Route::get('/theatre', function () {
    return view('theatre');
});

Route::get('/food', function () {
    return view('foodies');
});

Route::get('/art', function () {
    return view('art');
});

Route::get('/beach', function () {
    return view('beach');
});

Route::get('/temple', function () {
    return view('temple');
});

Route::get('/mountain', function () {
    return view('mountain');
});

Route::get('/museum', function () {
    return view('museum');
});

Route::get('/village', function () {
    return view('village');
});

Route::get('/park', function () {
    return view('park');
});









