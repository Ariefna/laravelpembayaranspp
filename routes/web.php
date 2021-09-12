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
Route::get('/mastersiswa/delete/{id}', 'App\Http\Controllers\pembayaran@mastersiswa');
Route::get('/masterkelas', 'App\Http\Controllers\pembayaran@masterkelas');
Route::get('/masterkelas/delete/{id}', 'App\Http\Controllers\pembayaran@masterkelas');
Route::get('/masterspp', 'App\Http\Controllers\pembayaran@masterspp');
Route::get('/masterspp/delete/{id}', 'App\Http\Controllers\pembayaran@masterspp');
Route::get('/mastermakanan', 'App\Http\Controllers\pembayaran@mastermakan');
Route::get('/mastermakanan/delete/{id}', 'App\Http\Controllers\pembayaran@mastermakan');
Route::get('/masterbiayakegiatan', 'App\Http\Controllers\pembayaran@masterkegiatan');
Route::get('/masterbiayakegiatan/delete/{id}', 'App\Http\Controllers\pembayaran@masterkegiatan');
Route::get('/masterbiayabukupaket', 'App\Http\Controllers\pembayaran@masterbuku');
Route::get('/masterbiayabukupaket/delete/{id}', 'App\Http\Controllers\pembayaran@masterbuku');

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
