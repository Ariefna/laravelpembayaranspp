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


Route::get('/', 'App\Http\Controllers\pembayaran@mastersiswa');
Route::get('/mastersiswa', 'App\Http\Controllers\pembayaran@mastersiswa');


Route::get('masterkelas', function () {
    return view('masterkelas');
});
Route::get('masterspp', function () {
    return view('masterspp');
});
Route::get('mastermakanan', function () {
    return view('masterbiayamakanan');
});
Route::get('masterbiayakegiatan', function () {
    return view('masterbiayakegiatan');
});
Route::get('masterbiayabukupaket', function () {
    return view('masterbiayabukupaket');
});
Route::get('datakeuangan', function () {
    return view('datakeuangan');
});
Route::get('transaksipembayaran', function () {
    return view('mastersiswa');
});
Route::get('datapembayaran', function () {
    return view('mastersiswa');
});
Route::get('laporanpembayaran', function () {
    return view('mastersiswa');
});
Route::get('laporantagihan', function () {
    return view('mastersiswa');
});
