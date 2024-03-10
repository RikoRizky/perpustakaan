<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Library;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = ([
            ([
                "isbn"          =>  "1234",
                "title"         =>  "PHP 7 MYSQL",
                "name"          =>  "Jubilee Enterprise",
                "publisher"     =>  "Elex Media Komputindo",
                "date"          =>  "Cirebon 2021",
                "shelf_number"  =>  "72"
            ]),
            ([
                "isbn"          =>  "1235",
                "title"         =>  "Cara bernafas",
                "name"          =>  "Jono",
                "publisher"     =>  "Ya udahh",
                "date"          =>  "Bekasi 2002",
                "shelf_number"  =>  "41"
            ]),
            ([
                "isbn"          =>  "1236",
                "title"         =>  "Cara melihat",
                "name"          =>  "Junaidi",
                "publisher"     =>  "Somat",
                "date"          =>  "Jember 2004",
                "shelf_number"  =>  "12"
            ])
        ]);
        Library::insert($data);
    }
}
