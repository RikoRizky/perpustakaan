<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Perpustakaan;

class PerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = ([
            ([
                "title"         =>  "PHP 7 MYSQL",
                "writer"        =>  "Jubilee Enterprise",
                "publisher"     =>  "Elex Media Komputindo",
                "date_issue"    =>  "2020-06-04",
                "description"   =>  "Pada buku ini akan dibahas pembuatan aplikasi database MySQL dan PHP. Anda akan mempelajari beragam tool, syntax, query, dll",
                "language"      =>  "Indonesia",
                "number_page"   =>  "72"
            ]),
            ([
                "title"         =>  "Kitab Desain Grafis dengan CorelDraw 2019",
                "writer"        =>  "Jybulee Enterprise",
                "publisher"     =>  "Elex Media Komputindo",
                "date_issue"    =>  "2019-10-16",
                "description"   =>  "Anda bisa menggunakan CorelDraw dengan tampilan, fitur, dan perintah terbaru yang lebih praktis, lengkap, dan mudah digunakan.",
                "language"      =>  "Indonesia",
                "number_page"   =>  "280"
            ]),
            ([
                "title"         =>  "Ulama Kritis Berjejak Manis",
                "writer"        =>  "M Anwar jaelani",
                "publisher"     =>  "Pustaka Al-kautsar",
                "date_issue"    =>  "2022-08-17",
                "description"   =>  "Buku ini menyajikan kisah puluhan ulama yang punya rekam jejak manis.",
                "language"      =>  "Indonesia",
                "number_page"   =>  "352"
            ]),
        ]);
        Library::insert($data);
    }
}
