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
                        <div class="anime__details__pic set-bg" data-setbg="{{('img/bukuulama.jpg')}}">
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-heart"></i> 9141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>Ulama Kritis Berjejak Manis</h3>
                                <span> M.Anwar Djaelani</span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star-half g"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            <p>Buku ini menyajikan kisah puluhan ulama yang punya rekam jejak manis. 
Mereka benar-benar telah berjuang agar iman umat Islam selalu kukuh. 
Mereka berjuang, bernahi mungkar, agar terjamin kehidupan kita bebas dari maksiat.
 Mereka berjuang, beramar ma'ruf, agar semua syariat Allah bisa tegak. Buku ini, sejumput ikhtiar, 
agar kita tetap punya keyakinan bahwa berposisi sebagai “Sang Pemberi Ingat” itu sangat bermanfaat.</p>
                            <div class="anime__details__widget pt-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Penerbit:</span> Pustaka Al kautsar</li>
                                            <li><span>Tanggal terbit:</span> augt 17, 2022</li>
                                            <li><span>ISBN:</span> 9789795929918</li>
                                            <li><span>Bahasa:</span> Indonesia</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>halaman:</span>352</li>
                                            <li><span>Berat:</span> 0.315 kg</li>
                                            <li><span>Lebar:</span> 13.5 cm</li>
                                            <li><span>Panjang:</span> 20.5 cm</li>
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