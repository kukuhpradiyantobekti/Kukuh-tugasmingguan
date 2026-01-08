<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;
use App\Models\Berita;  

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "Alex",
        "nohp" => "00857326329",
        "foto" => "images/koko.png",
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class,'tampildata']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa')->middleware('auth');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa')->middleware('auth');
Route::POST('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata')->middleware('auth');

Route::get('/tampildataedit/{id}', [MahasiswaController::class, 'tampildataedit'])->name('tampildataedit')->middleware('auth');
Route::POST('/editdata/{id}', [MahasiswaController::class, 'editdata'])->name('editdata')->middleware('auth');

Route::get('/deletedata/{id}', [MahasiswaController::class, 'deletedata'])->name('deletedata')->middleware('auth');





Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
        
    ]);
});