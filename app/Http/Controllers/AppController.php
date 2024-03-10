<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Library;


class AppController extends Controller
{
        //
        public function table()
    {
        $libraries = Library::all();

        return view('data', ['libraries' => $libraries]);
    }
        public function home(){
            return view("home");
        }
        public function info(){
            return view("info");
        }
        public function data(Request $request){
            $libraries = Library::get();
            $q = NULL;

            if (issets($request->q)){
                $q = request->q;
                $libraries = Libraries::where("Name","Like","%q%")->get();
            }
            
            $data = ([
                "libraries"     => $libraries,
                "q"             => $q,
            ]);
            return view("data",$data);
        }

        public function proses_tambah_data(Request $request){
            $isbn = $request->isbn;
    
            $picture = $request->file("picture");
            $pictureName = $isbn."_".Str::random(25).".".$picture->getClientOriginalExtension();
            $picture->move("./pictures/",$pictureName);
    
            Library::create([
                "picture"       => $pictureName,
                "isbn"          => $isbn,
                "title"         => $request->title,
                "name"          => $request->name,
                "publisher"     => $request->publisher,
                "date"          => $request->date,
                "shelf_number"  => $request->shelf_number,
            ]);
    
            return redirect("data");
        }
}
