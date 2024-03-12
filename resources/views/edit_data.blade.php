@extends("template")

@section("content")
    <h1>Edit Buku</h1>
    <hr>

    <?php
        $picture = "pp.jpg";
        if($library->picture != NULL){
            $picture = $library->picture;
        }
    ?>

    <img src="{{ url('pictures/'.$picture) }}" width="200px">

    <form method="post" action="{{ url('proses-edit-data') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $library->id }}">
        
        <div class="mb-3">
            <label class="form-label">ISBN</label>
            <input type="text" name='isbn' class="form-control" value="{{ $library->isbn }}" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name='title' class="form-control" value="{{ $library->title }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" name='name' class="form-control" value="{{ $library->name }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name='publisher' class="form-control" value="{{ $library->publisher }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Kota & Tahun Terbit</label>
            <input type="text" name='date' class="form-control" value="{{ $library->date }}">
        </div>

        <div class="mb-3">
            <label class="form-label">No Rak</label>
            <input type="text" name='shelf_number' class="form-control" value="{{ $library->shelf_number }}">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">
                Simpan
            </button>
            <a href="{{ url('data') }}" class="btn btn-danger">
                Batal
            </a>
        </div>
    </form>
@endsection
