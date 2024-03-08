<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Library;

class AppController extends Controller
{
    //
    public function home(){
        //echo"We Kunyuk, Kien halaman home";
        $name = "Nopal";

        $data = ([
            "name" => $name,
        ]);
        return view("home",$data);
    }
}
