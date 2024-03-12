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

        public function proses_edit_data(Request $request)
    {
        $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'name' => 'required',
            'publisher' => 'required',
            'date' => 'required',
            'shelf_number' => 'required',
            'picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $library = Library::find($request->id);

        if (!$library) {
            return redirect('data')->with('error', 'Data tidak ditemukan.');
        }

        $isbn = $request->isbn;

        // Perbarui nilai atribut pada model
        $library->isbn = $isbn;
        $library->title = $request->title;
        $library->name = $request->name;
        $library->publisher = $request->publisher;
        $library->date = $request->date;
        $library->shelf_number = $request->shelf_number;

        // Periksa apakah ada file gambar yang diunggah
        if ($request->hasFile('picture')) {
            // Hapus foto lama dari direktori
            if ($library->picture && file_exists(public_path('pictures/' . $library->picture))) {
                unlink(public_path('pictures/' . $library->picture));
            }

            // Upload foto baru
            $picture = $request->file('picture');
            $pictureName = $isbn . '_' . Str::random(25) . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('pictures/'), $pictureName);

            // Update nilai atribut gambar pada model
            $library->picture = $pictureName;
        }

        // Simpan perubahan
        $library->save();

        // Flash message
        session()->flash('message', 'Data berhasil disimpan');

        // Redirect kembali ke halaman edit dengan ID yang sesuai
        return redirect("data/{$request->id}/edit");
    }

    
    public function login(){
        return view("login");
    }
}