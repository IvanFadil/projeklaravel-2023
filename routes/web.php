<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/formulir', function () {
    return view('formulir');
});

Route::get('/cetakkartu', function () {
    return view('cetakkartu');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/kontak', function () {
    return view('kontak');
});

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
