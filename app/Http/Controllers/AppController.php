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
        public function Data()
        {
            // Mengambil data dari model Library (sesuaikan dengan model Anda)
            $libraries = Library::all();
    
            // Mengirim data ke view
            return view('data', ['libraries' => $libraries]);
        }
        public function tabel()
        {
            // Mengambil data dari model Library (sesuaikan dengan model Anda)
            $libraries = Library::all();
    
            // Mengirim data ke view
            return view('tabel', ['libraries' => $libraries]);
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

        public function tambah_data(){
            return view("tambah_data");
        }

        public function edit_data($id){
            $library = Library::where("id", $id)->first();
    
            if(!$employee){
                abort(404);
            }
    
            $data = ([
                "library"  => $library,
            ]);
    
            return view("edit_data",$data);
        }
}