<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
Route::POST('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');

Route::get('/tampildataedit/{id}', [MahasiswaController::class, 'tampildataedit'])->name('tampildataedit');
Route::POST('/editdata/{id}', [MahasiswaController::class, 'editdata'])->name('editdata');





Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
        
    ]);
});