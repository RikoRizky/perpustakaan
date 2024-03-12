@extends("template")

@section("content")
<div class="card mb-4 container bg-light p-4">
    <h1 class="mb-4 text-">Tambah Data Buku</h1>
    <hr>
    <form method="post" enctype="multipart/form-data" action="{{ url('proses-tambah-data') }}">
        @csrf
        <div class="mb-3">
            <label for="picture" class="form-label">Foto</label>
            <input type="file" name="picture" class="form-control" id="picture">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" name="isbn" class="form-control" id="isbn" placeholder="Masukan Nomer ISBN">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Masukan Judul Buku">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Penulis</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama Penulis">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="publisher" class="form-label">Penerbit</label>
                    <input type="text" name="publisher" class="form-control" id="publisher" placeholder="Masukan Nama Penerbit">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Kota & Tahun Terbit</label>
                    <input type="text" name="date" class="form-control" id="date" placeholder="Masukan Kota & Tahun Terbit">
                </div>
                <div class="mb-3">
                    <label for="shelf_number" class="form-label">No Rak</label>
                    <input type="text" name="shelf_number" class="form-control" id="shelf_number" placeholder="Masukan Nomer Rak">
                </div>
            </div>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <a href="{{ url('data') }}" class="btn btn-danger">Batal</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>
@endsection
