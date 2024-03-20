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
                        <a class="b" href="{{url('./categories.html')}}">Kategori</a>
                        <span>novel</span>
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
                        <div class="anime__details__pic set-bg" data-setbg="{{('img/bukulayangan.jpg')}}">
                            <div class="comment"><i class="fa fa-comments"></i> 35 </div>
                            <div class="view"><i class="fa fa-heart"></i> 9666 </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>Layangan putus</h3>
                                <span> Mommy ASF </span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star-half g"></i></a>
                                </div>
                                <span>5.777 Votes</span>
                            </div>
                            <p>Seorang gadis remaja polos yang berasal dari daerah, tumbuh, berkembang,
 dan menemukan cinta di kota besar yang sangat berbeda dengan iklim daerah asalnya. 
Mimpi sederhananya menyambung pendidikan dan menyelesaikannya tepat waktu, 
namun berubah setelah ia mengenal sosok lelaki tangguh Lelaki yang mandiri
 dan berpendirian keras mengenalkannya dengan dunia baru yang belum pernah ia temui. 
Dunia yang asyik dan menyenangkan yang berbeda total dengan kehidupan remaja di daerah asalnya.</p>
                            <div class="anime__details__widget pt-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Penerbit:</span> RDM PUBLISHERS </li>
                                            <li><span>Tanggal terbit:</span> feb 19 2010</li>
                                            <li><span>ISBN:</span> 9786020729091 </li>
                                            <li><span>Bahasa:</span> Indonesia</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>halaman:</span>268.0</li>
                                            <li><span>Berat:</span> 0.3 kg</li>
                                            <li><span>Lebar:</span> 15.0 cm</li>
                                            <li><span>Panjang:</span> 21.0 cm</li>
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