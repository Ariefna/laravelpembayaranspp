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
Route::get('/mastersiswa/delete/{id}', 'App\Http\Controllers\pembayaran@mastersiswadelete');
Route::get('/mastersiswa/ubah/{id}', 'App\Http\Controllers\pembayaran@mastersiswaupdate');
Route::post('/mastersiswa/ubah/', 'App\Http\Controllers\pembayaran@mastersiswaupdateaksi');
Route::get('/masterkelas', 'App\Http\Controllers\pembayaran@masterkelas');
Route::get('/masterkelas/delete/{id}', 'App\Http\Controllers\pembayaran@masterkelasdelete');
Route::get('/masterkelas/ubah/{id}', 'App\Http\Controllers\pembayaran@masterkelasupdate');
Route::post('/masterkelas/ubah/', 'App\Http\Controllers\pembayaran@masterkelasupdateaksi');
Route::get('/masterspp', 'App\Http\Controllers\pembayaran@masterspp');
Route::get('/masterspp/delete/{id}', 'App\Http\Controllers\pembayaran@mastersppdelete');
Route::get('/masterspp/ubah/{id}', 'App\Http\Controllers\pembayaran@mastersppupdate');
Route::post('/masterspp/ubah/', 'App\Http\Controllers\pembayaran@mastersppupdateaksi');
Route::get('/mastermakanan', 'App\Http\Controllers\pembayaran@mastermakan');
Route::get('/mastermakanan/delete/{id}', 'App\Http\Controllers\pembayaran@mastermakandelete');
Route::get('/mastermakanan/ubah/{id}', 'App\Http\Controllers\pembayaran@mastermakanupdate');
Route::post('/mastermakanan/ubah/', 'App\Http\Controllers\pembayaran@mastermakanupdateaksi');
Route::get('/masterbiayakegiatan', 'App\Http\Controllers\pembayaran@masterkegiatan');
Route::get('/masterbiayakegiatan/delete/{id}', 'App\Http\Controllers\pembayaran@masterkegiatandelete');
Route::get('/masterbiayakegiatan/ubah/{id}', 'App\Http\Controllers\pembayaran@masterkegiatanupdate');
Route::post('/masterbiayakegiatan/ubah/', 'App\Http\Controllers\pembayaran@masterkegiatanupdateaksi');
Route::get('/masterbiayabukupaket', 'App\Http\Controllers\pembayaran@masterbuku');
Route::get('/masterbiayabukupaket/delete/{id}', 'App\Http\Controllers\pembayaran@masterbukudelete');
Route::get('/masterbiayabukupaket/ubah/{id}', 'App\Http\Controllers\pembayaran@masterbukuupdate');
Route::post('/masterbiayabukupaket/ubah/', 'App\Http\Controllers\pembayaran@masterbukuupdateaksi');

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
