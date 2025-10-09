<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Unimus Mart Laris Manis",
            "slug" => "unimus-mart-laris-manis",
            "penulis" => "anjo",
            "konten" => "pembunuhan tanpa busana daerah ciliwangi",
        ],
        [
            "judul" => "Newss Unimus 2",
            "slug"=> "newss-unimus-2",
            "penulis" => "jamno",
            "konten" => "menangis meratapi nasib, seorang pemuda ditemukan sedang melahirkan disekitar lampu merah ciliwung",
        ],
    ];
    public static function ambildata()
    {
        return self::$data_berita;
    }

    public static function caridata($slug)
    {
        $data_beritas = self::$data_berita;
        $new_berita = [];
    foreach($data_beritas as $berita)
    {
        if($berita["slug"] === $slug)
        {
            $new_berita = $berita;
        }
    }
    return $new_berita;
    }
}
