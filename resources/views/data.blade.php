@extends("template")

@section("content")
                        
                        <div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">ISBN</th>
                    <th class="text-center">Judul</th>
                    <th class="text-center">Penulis</th>
                    <th class="text-center">Penerbit</th>
                    <th class="text-center">Kota & Tahun Terbit</th>
                    <th class="text-center">Nomer Rak</th>
                    <th class="text-center">Fitur</th>
                </tr>
            </thead>
            <tbody>
                @forelse($libraries as $library)
                    <tr>
                        <td class='text-center'>{{ $loop->iteration }}</td>
                        <td class="text-center">
                            <img src="{{ asset('pictures/' . ($library->picture ?? 'default.png')) }}" width="80px" alt="Book Cover">
                        </td>
                        <td class='text-center'>{{ $library->isbn }}</td>
                        <td>{{ $library->title }}</td>
                        <td>{{ $library->name }}</td>
                        <td class='text-center'>{{ $library->publisher }}</td>
                        <td class='text-center'>{{ $library->date }}</td>
                        <td class='text-center'>{{ $library->shelf_number }}</td>
                        <td class="text-center">
                            <a href="{{ url('data/'.$library->id.'/edit') }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ url('data/'.$library->id.'/hapus') }}" onclick="return confirm('Yakin hapus {{ $library->title }}?')" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Tidak ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

                        <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Riko, Naufal, Raysa, Bunga 2024</div>
                        </div>
                    </div>
                </footer>
@endsection