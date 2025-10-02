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

Route::get('/profile', function () {
    return view('profile');
    });


Route::get('/berita', function () {

    $data_berita = [
        [
            "judul" => "Judul Berita Pertama",
            "isi" => "Ini adalah isi dari berita pertama. Berita ini sangat menarik dan informatif.",
            "penulis" => "Kukuh",
            "tanggal" => "2024-10-01"
        ],
        [
            "judul" => "Judul Berita Kedua",
            "isi" => "Ini adalah isi dari berita kedua. Berita ini juga sangat menarik dan penuh wawasan.",
            "penulis" => "Dewi",
            "tanggal" => "2024-10-02"
        ],
        [
            "judul" => "Judul Berita Ketiga",
            "isi" => "Ini adalah isi dari berita ketiga. Berita ini memberikan informasi terbaru dan penting.",
            "penulis" => "Budi",
            "tanggal" => "2024-10-03"
        ]
        ];
    return view('berita',[
        "title" => "berita",
        "beritas" => $data_berita
    ]);
});

Route::get('/contact', function () {
    return view('kontak');
});
