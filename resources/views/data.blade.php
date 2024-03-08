@extends("template")

@section("content")

<h1>Data Pegawai</h1>
<!-- <p>
    <?php print_r($librarys); ?>
</p> -->
<hr>

<a href="{{ url('tambah-data') }}" class="btn btn-primary btn-sm">
    Tambah Data
</a>
<hr>

<form method="get" action="{{ url('data') }}">
    <div class="mb-3">
        <label class="form-label">Pencarian Nama</label>
        <input type="search" value="<?= ($q !=NULL) ? $q : "" ?>" name='q' class='form-control'>
    </div>
    <div class="mb-3">
        <button type='submit' class="btn btn-primary">
            Cari
        </button>
        @if($q != NULL)
        <a href="{{ url('data') }}" class="btn btn-primary">
            Tampilkan Semua
        </a>
        @endif
    </div>
</form>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Foto</th>
            <th class="text-center">ISBN</th>
            <th class="text-center">Penulis</th>
            <th class="text-center">Penerbit</th>
            <th class="text-center">Tanggal terbit</th>
            <th class="text-center">Deskirpsi</th>
            <th class="text-center">Bahasa</th>
            <th class="text-center">Jumlah Halaman</th>
            <th class="text-center">Vithur</th>
            <th class="text-center">Vithur</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0; ?>
        @foreach($librarys as $library)
        <?php $no++; ?>
        <tr>
            <td class="text-center">{{ $no }}</td>
            <td class="text-center">
                <?php
                    $picture = "pp.jpg";
                    if($employee->picture != NULL){
                        $picture = $employee->picture;
                    }
                ?>
            <img src="{{ url('pictures/'.$picture) }}" width="60px">
            </td>
            <td class="text-center">{{ $library->isbn }}</td>
            <td class="text-center">{{ $library->writer }}</td>
            <td class="text-center">{{ $library->publisher }}</td>
            <td class="text-center">
                {{ $library->birth_place }},
                {{ date("d-m-Y", strtotime($employee->birth_date)) }}
            </td>
            <td class="text-center">{{ $library->description }}</td>
            <td class="text-center">{{ $library->language }}</td>
            <td class="text-center">{{ $library->number_page }}</td>
            <td class="text-center">
                <a href="{{ url('data/'.$library->id.'/edit') }}" class="btn btn-success btn-sm">
                    Edit 
                </a>
            </td>
            <td class="text-center">
                <a href="{{ url('data/'.$library->id.'/hapus') }}" onclick="return confirm('Yakin hapus {{ 
                    $library->name }}?')" class="btn btn-danger btn-sm">
                    Hapus    
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection