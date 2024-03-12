@extends("template")

@section("content")
<h1>Edit Pegawai</h1>
<hr>
<?php
                    $picture = "pp.jpg";
                    if($employee->picture != NULL){
                        $picture = $employee->picture;
                    }
                ?>
            <img src="{{ url('pictures/'.$picture) }}" width="200px">
<form method="post" action="{{ url('proses-edit-data') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $employee->id }}">
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
    <input type="text" name='nama' class="form-control" value="{{ $library->nama }}">
    <div class="mb-3">
        <label class="form-label">Penerbit</label>
        <input type="text" name='publisher' class="form-control" value="{{ $library->publisher }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Kota& Tahun Terbit</label>
        <input type="text" name='date' class="form-control" value="{{ $library->date }}">
    </div>
    <div class="mb-3">
        <label class="form-label">No Rak</label>
        <input type="text" name='shelf_number' class="form-control" value="{{ $library->shelf_number }}">
    </div>
    <!-- <div class="mb3">
        <div class="form-label">Bagian</div>
        <select class="form-select" name="division">
            @foreach($divisions as $row)
            <option value="{{ $row->id }}">
                {{ $row->name }}
            </option>
            @endforeach
        </select>
    </div> -->
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
        <a href="{{url('data')}}" class="btn btn-danger">
            Batal
        </a>
    </div>
</div>
</form>
@endsection
