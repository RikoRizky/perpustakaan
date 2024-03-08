<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;



use App\Models\Library;

class AppController extends Controller
{
    //

    public function home(){
        return view("home");
    }
}
