<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Library;
use App\Models\Division;
use Auth;


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
        public function bukukisahnabi(){
            return view("bukukisahnabi");
        }
        public function bukuhome(){
            return view("bukuhome");
        }
        public function bukuphp(){
            return view("bukuphp");
        }
        public function bukuulama(){
            return view("bukuulama");
        }
        public function bukudesain(){
            return view("bukudesain");
        }
        public function bukulayangan(){
            return view("bukulayangan");
        }
        public function tampilan(){
            return view("tampilan");
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

            // $data = ([
            //     "divisions" => $divisions,
            // ]);
        }
        public function tabel()
        {
            // Mengambil data dari model Library (sesuaikan dengan model Anda)
            $libraries = Library::all();
    
            // Mengirim data ke view
            return view('tabel', ['libraries' => $libraries]);
        }

        public function proses_tambah_data(Request $request){
            $request->validate([
                'isbn' => 'required',
                'title' => 'required',
                'name' => 'required',
                'publisher' => 'required',
                'date' => 'required',
                'shelf_number' => 'required',
                'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk file gambar
            ]);
        
            // Menggunakan uuid() untuk menghasilkan string unik untuk nama gambar
            $pictureName = $request->isbn . '_' . Str::uuid() . '.' . $request->file('picture')->getClientOriginalExtension();
        
            // Pindahkan gambar ke direktori pictures
            $request->file('picture')->move(public_path('pictures'), $pictureName);
        
            // Membuat data baru dalam tabel Library
            Library::create([
                "picture"       => $pictureName,
                "isbn"          => $request->isbn,
                "title"         => $request->title,
                "name"          => $request->name,
                "publisher"     => $request->publisher,
                "date"          => $request->date,
                "shelf_number"  => $request->shelf_number,
            ]);
        
            return redirect('data')->with('success', 'Data berhasil ditambahkan!');
        }

        public function hapusData($id)
        {
            $library = Library::find($id);
        
            if (!$library) {
                return redirect('data')->with('error', 'Data tidak ditemukan.');
            }
        
            // Hapus foto dari direktori
            if ($library->picture && file_exists(public_path('pictures/' . $library->picture))) {
                unlink(public_path('pictures/' . $library->picture));
            }
        
            // Hapus data dari database
            $library->delete();
        
            return redirect('data')->with('success', 'Data berhasil dihapus.');
        }

        public function tambah_data(){
            return view("tambah_data");
        }

        public function edit($id)
{
    $library = Library::find($id);

    if (!$library) {
        return redirect('data')->with('error', 'Data tidak ditemukan.');
    }

    return view('edit_data', compact('library'));
}

public function prosesEditData(Request $request)
{
    $request->validate([
        'isbn' => 'required',
        'title' => 'required',
        'name' => 'required',
        'publisher' => 'required',
        'date' => 'required',
        'shelf_number' => 'required',
        'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // validation for image
    ]);

    $library = Library::find($request->id);

    if (!$library) {
        return redirect('data')->with('error', 'Data tidak ditemukan.');
    }

    $library->isbn = $request->isbn;
    $library->title = $request->title;
    $library->name = $request->name;
    $library->publisher = $request->publisher;
    $library->date = $request->date;
    $library->shelf_number = $request->shelf_number;

    if ($request->hasFile('picture')) {
        $picture = $request->file('picture');
        $pictureName = $library->isbn . '_' . Str::random(25) . '.' . $picture->getClientOriginalExtension();
        $picture->move(public_path('pictures'), $pictureName);

        $library->picture = $pictureName;
    }

    $library->save();

    return redirect('data')->with('success', 'Data berhasil diperbarui');
}


    public function login(){
        if(Auth::check()){
            return redirect("tampilan");
        }
        return view("login");
    }
}