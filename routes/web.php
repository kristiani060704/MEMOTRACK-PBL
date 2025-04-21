<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/notes', function () {
    return view('notes');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/tugas', function () {
    return view('tugas');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/absensi', function () {
    return view('absensi');
});
