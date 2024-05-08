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
                        <div class="anime__details__pic set-bg" data-setbg="{{('img/bukuhome.jpg')}}">
                            <div class="comment"><i class="fa fa-comments"></i> 15 </div>
                            <div class="view"><i class="fa fa-heart"></i> 1.890 </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>Home sweet loan </h3>
                                <span> Almira Bastari</span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star g"></i></a>
                                    <a href="{{url('')}}"><i class="fa fa-star-half g"></i></a>
                                </div>
                                <span>1.888 Votes</span>
                            </div>
                            <p>Novel Home Sweet Loan mengangkat genre yang sama dengan karya Almira sebelumnya yang berjudul “Ganjil Genap”, yaitu metropop.
 Namun, novel Home Sweet Loan ini akan menyajikan cerita yang ditulis menjadi lebih serius.
Layaknya novel-novel karya Almira sebelumnya, Home Sweet Loan menggunakan latar cerita di Kota Jakarta. Namun, 
cerita kali ini lebih menyoroti kaum menengah dengan mengisahkan perjuangan dari sudut pandang mereka.</p>
                            <div class="anime__details__widget pt-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Penerbit:</span> RDM PUBLISHERS </li>
                                            <li><span>Tanggal terbit:</span> 15 feb 2022</li>
                                            <li><span>ISBN:</span> 9786020658049</li>
                                            <li><span>Bahasa:</span> Indonesia</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>halaman:</span>312.0</li>
                                            <li><span>Berat:</span> 0.21 kg</li>
                                            <li><span>Lebar:</span> 13.5 cm</li>
                                            <li><span>Panjang:</span> 20 cm</li>
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