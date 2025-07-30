<?php

use Illuminate\Support\Facades\Route;

Route::get('/kelas', function () {
    return view('kelas');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/siswa', function () {
    return view('siswa');
});
Route::get('/guru', function () {
    return view('guru');
});
Route::get('/mapel', function () {
    return view('mapel');
});
