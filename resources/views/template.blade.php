<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Perpustakaan</title>
    <link rel="icon" href="{{url('img/rpl.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ url('css/styles.css')}}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ url('tampilan') }}">Perpustakaan</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" data-bs-target="#layoutSidenav_nav" aria-controls="layoutSidenav_nav"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="{{url('login')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('logout')}}">Keluar</a></li>
                    </ul>
            </li>
        </ul>
    </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Tampilan</div>
                            <a class="nav-link" href="{{url('tampilan')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                home
                            </a>
                            <div class="sb-sidenav-menu-heading">Data</div>
                            <a class="nav-link" href="{{url('data')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tabel Data
                            </a>
                            <a class="nav-link" href="{{url('tambah-data')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus-circle"></i></div>
                                Tambah Data
                            </a>
                            <div class="sb-sidenav-menu-heading">Informasi</div>
                            <a class="nav-link" href="{{url('info')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Statistik
                            </a>
                            <div class="sb-sidenav-menu-heading">Print Data</div>
                            <a class="nav-link" href="{{url('#')}}" onclick="printPage()">
                                <div class="sb-nav-link-icon"><i class="bi bi-printer"></i></div>
                                Cetak Data
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Anda masuk Sebagai:</div>
                        Admin
                    </div>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
            @if(session()->has('message'))
            <div class="alert alert-info">
            {{ session('message') }}
            </div>
            @endif
            @yield("content")
        </div>
        <script>
    function printPage() {
        window.print();
    }
</script>


            <script src="{{ url('js/scripts.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="{{ url('assets/demo/chart-area-demo.js')}}"></script>
            <script src="{{ url('assets/demo/chart-bar-demo.js')}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="{{ url('js/datatables-simple-demo.js')}}"></script>
            <script src="{{ url('assets/demo/chart-pie-demo.js')}}"></script>
            <!-- Js Plugins -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/player.js')}}"></script>
<script src="{{url('js/jquery.nice-select.min.js')}}"></script>
<script src="{{url('js/mixitup.min.js')}}"></script>
<script src="{{url('js/jquery.slicknav.js')}}"></script>
<script src="{{url('js/owl.carousel.min.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>
    </body>
</html>
