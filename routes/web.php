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
Route::get('masterkelas', function () {
    return view('home');
});
Route::get('masterspp', function () {
    return view('home');
});
Route::get('mastermakanan', function () {
    return view('home');
});
Route::get('masterkegiatan', function () {
    return view('home');
});
Route::get('masterbukupaket', function () {
    return view('home');
});
Route::get('datakeuangan', function () {
    return view('home');
});
Route::get('transaksipembayaran', function () {
    return view('home');
});
Route::get('datapembayaran', function () {
    return view('home');
});
Route::get('laporanpembayaran', function () {
    return view('home');
});
Route::get('laporantagihan', function () {
    return view('home');
});
