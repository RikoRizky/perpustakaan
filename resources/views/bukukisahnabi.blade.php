@extends("link")

@section("content")
<head>
<style>
    /* Menghilangkan garis bawah pada tautan */
    .b {
        text-decoration: none;
    }
    .g {
            color: gold;
        }
</style>
</head>
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->


    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a class="b" href="{{url('.')}}">Kategori</a>
                        <span>religius</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="{{('img/bukukisahnabi.jpg')}}">
                            <div class="view"><i class="fa fa-heart"></i> 534.859</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>Kisah Nabi Muhammad SAW</h3>
                                <span> Ozkan Oze cehyun sen</span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star-half g"></i></a>
                                </div>
                                <span>1.980 Votes</span>
                            </div>
                            <p>Nabi Muhammad SAW adalah sosok yang baik hati dan pantang menyerah.
Walaupun sering disakiti banyak orang jahat, Nabi kita adalah orang yang baik dan pemaaf.
Seperti apa kisah hidup Nabi Muhammad SAW yang sudah membuat Nabi kita begitu hebat dan mengagumkan?
</p>
                            <div class="anime__details__widget pt-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Penerbit:</span> m$c </li>
                                            <li><span>Tanggal terbit:</span> march 23 2021</li>
                                            <li><span>ISBN:</span> 9786230304200</li>
                                            <li><span>Bahasa:</span> Indonesia</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>halaman:</span>144</li>
                                            <li><span>Berat:</span> 0.3 kg</li>
                                            <li><span>Lebar:</span> 16.5 cm</li>
                                            <li><span>Panjang:</span> 22.0 cm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="{{url('#')}}" id="scrollToTopButton"><span class="fa fa-arrow-up"></span></a>
    </div>
    
<!-- </footer>
                <footer class="py-4 bg-light mt-auto"> -->
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Riko, Naufal, Raysa, Bunga 2024</div>
                            <div>
                                <a href="{{url('#')}}">Privacy Policy</a>
                                &middot;
                                <a href="{{url('#')}}">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>

    </body>
    </html>
    @endsection