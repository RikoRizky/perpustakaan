@extends("template")

@section("content")

                        <form method="get" action="{{ ('data') }}">
                            <div class="mb-3">
                                <label class="form-label">Pencarian Buku</label>
                                <input type="search" value="<? ($q !=NULL) ? $q : "" ?>" name='q' class='form-control'>
                            </div>
                            <div class="mb-3">
                                <button type='submit' class='btn btn-primary'>
                                    Cari
                                </button>
                                @if($q !=NULL)
                                <a href="{{ url('data') }}" class="btn btn-primary">
                                    Tampilkan Semua
                                </a>
                                @endif
                            </div>
                        </form>
                        
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
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
                                    <?php $no = 0; ?>
                                    @foreach($libraries as $library)
                                    <?php $no++; ?>
                                        <tr>
                                        <td class='text-center'>{{ $no }}</td>
                                        <td class="text-center">
                                        <?php
                                        $picture = "default.png";
                                        if($library->picture != NULL){
                                        $picture = $library->picture;        
                                        }
                                        ?>
                                        <img src="{{ url('pictures/'.$picture) }}"
                                        width="80px">
                                        </td>
                                        <td class='text-center'>{{ $library->isbn }}</td>
                                        <td>{{ $library->title }}</td>
                                        <td>{{ $library->name }}</td>
                                        <td class='text-center'>{{ $library->publisher }}</td>
                                        <td class='text-center'>{{ $library->date }}</td>
                                        <td class='text-center'>{{ $library->shelf_number }}</td>
                                        <td class="text-center">
                                        <a href="{{ url('data/'.$library->id.'/edit') }}" class="btn btn-success btn-sm">
                                        Edit
                                        </a>
                                        <a href="{{ url('data/'.$library->id.'/hapus') }}" onclick="return confirm('Yakin hapus {{ $library->title }}?')" class="btn btn-danger btn-sm">
                                        Hapus
                                        </a>
                                        </td>
                                        </tr>
                                        @endforeach
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