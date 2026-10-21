<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/profil_sekolah', function () {
    return view('profil_sekolah');
});
Route::get('/pengumuman', function () {
    return view('pengumuman');
});
Route::get('/sekolah', function () {
    return view('sekolah');
});
