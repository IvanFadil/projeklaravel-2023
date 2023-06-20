<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ppdb;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/beranda',[ppdb::class,'beranda']);

Route::get('/informasi',[ppdb::class,'informasi']);

Route::get('/formulir',[ppdb::class,'formulir']);

Route::get('/cetakkartu',[ppdb::class,'cetak']);

Route::get('/pengumuman',[ppdb::class,'pengumuman']);

Route::get('/kontak',[ppdb::class,'kontak']);


Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/siswai', function () {
    return view('siswai');
});

Route::get('/pengajar', function () {
    return view('pengajar');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/accpendaftaran', function () {
    return view('accpendaftaran');
});
