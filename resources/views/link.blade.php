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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ url('css/styles.css')}}" rel="stylesheet" />
    <link href="{{ url('css/style.css')}}" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/plyr.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/slicknav.min.css')}}" type="text/css">
    <style>a {
    text-decoration: none;
}</style>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ url('/') }}">Perpustakaan</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" aria-controls="layoutSidenav_nav"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('login')}}" role="button" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            </li>
        </ul>
    </nav> 

    <div id="layoutSidenav" class="collapse">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Tampilan</div>
                        <a class="nav-link" href="{{url('/')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            home
                        </a>
                        <div class="sb-sidenav-menu-heading">Data</div>
                        <a class="nav-link" href="{{url('tabel')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tabel Data
                        </a>
                        <!-- <div class="sb-sidenav-menu-heading">Pencarian</div>
                        <a class="nav-link collapsed" href="{{url('#')}}" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Pencarian berdasarkan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{url('#')}}">Kota</a>
                                <a class="nav-link" href="{{url('#')}}">No Rak</a>
                            </nav>
                        </div> -->
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Anda masuk Sebagai:</div>
                    Pengunjung
                </div>
            </nav>
        </div>
        
        <div id="layoutSidenav_content">
            <!-- Flash Message -->
            @if(session()->has('message'))
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
            @endif
            <!-- Content Section -->
            @yield("content")
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <!-- Custom Scripts -->
    <script src="{{ url('js/scripts.js')}}"></script>
    <script src="{{ url('assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{ url('assets/demo/chart-bar-demo.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ url('js/datatables-simple-demo.js')}}"></script>
    <!-- Custom JS -->
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
