<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;



class AppController extends Controller
{
    //

    public function home(){
        return view("home");
    }
}
