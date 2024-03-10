@extends("template")

@section("content")
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