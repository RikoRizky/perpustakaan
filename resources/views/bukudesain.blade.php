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
                        <span>BUKU IT</span>
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
                        <div class="anime__details__pic set-bg" data-setbg="{{('img/bukudesain.jpg')}}">
                            <div class="view"><i class="fa fa-heart"></i>9.141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3> Kitab Desain Grafis dengan CorelDraw 2019 </h3>
                                <span> Jubilee enterprise </span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="{{url('#')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('#')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('#')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('#')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('#')}}"><i class="fa fa-star-half g"></i></a>
                                </div>
                                <span>1.888 Votes</span>
                            </div>
                            <p> Pada buku ini akan dibahas pembuatan aplikasi database MySQL dan PHP. Anda akan mempelajari beragam tool, syntax, query, dan langkah-langkah pembuatan aplikasi database. Dengan demikian Anda bisa mengenal aneka bahasa pemrograman yang berlainan dalam waktu singkat. Semoga buku ini bisa membantu Anda mengenal ragam pemrograman database di dunia IT.
.</p>
                            <div class="anime__details__widget pt-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Penerbit:</span> ELEX Media Komputindo</li>
                                            <li><span>Tanggal terbit:</span> oct 10 2019</li>
                                            <li><span>ISBN:</span> 9786230010699</li>
                                            <li><span>Bahasa:</span> Indonesia</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>halaman:</span>280</li>
                                            <li><span>Berat:</span> 0.38 kg</li>
                                            <li><span>Lebar:</span> 14.0 cm</li>
                                            <li><span>Panjang:</span> 19 cm</li>
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