<?php

use App\Http\Controllers\bookingcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('form.dashboard');
});

// Route::get('/tables', function () {
//     return view('tables');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

// Route::get('/create', function () {
//    return view('form.create');
// });

Route::get('/form',[bookingcontroller::class,'index'])->name('form.tampil');
Route::get('/form/tambah',[bookingcontroller::class,'create'])->name('form.tambah');

Route::post('/form/submit',[bookingcontroller::class,'submit'])->name('form.submit');
