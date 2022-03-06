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
    return view('welcome');
});


Route::get('/linhkien', function () {
    return view('linhkien');
});

Route::get('/sanpham', function () {
    return view('sanpham');
});

Route::get('/sanxuat', function () {
    return view('sanxuat');
});

Route::get('/xuatkho', function () {
    return view('xuatkho');
});

Route::get('/nhapkho', function () {
    return view('nhapkho');
});