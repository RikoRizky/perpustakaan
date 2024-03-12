@extends("template")

@section("content")
<h1>Tambah Pegawai</h1>
<hr>
<form method="post" enctype="multipart/form-data" action="{{ url('proses-tambah-data') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" name='picture' class="form-control">
    </div>
<div class="mb-3">
    <label class="form-label">ISBN</label>
    <input type="text" name='isbn' class="form-control">
</div>
<div class="mb-3">
    <label class="form-label">Judul</label>
    <input type="text" name='title' class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Penulis</label>
        <input type="text" name='name' class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Penerbit</label>
        <input type="text" name='publisher' class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Kota & Tahun Terbit</label>
        <input type="text" name='date' class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">No Rak</label>
    <input type="text" name='shelf_number' class="form-control">
</div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Tambah
        </button>
    </div>
</div>
<!-- <div class="mb3">
        <div class="form-label">Bagian</div>
        <select class="form-select" name="division">
            @foreach($divisions as $row)
            <?php
                $selected = "";
                if($row->id == $employee->divisions_id){
                    $selected = "selected";
                }
            ?>
            <option value="{{ $row->id }}" {{ $selected }}>
                {{ $row->name }}
            </option>
            @endforeach
        </select>
    </div> -->
</form>
@endsection
