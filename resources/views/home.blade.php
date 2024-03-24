@extends("link")

@section("content")
<body>
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="{{url('img/hd1.png')}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>Hallo, Selamat Datang.</h2>
                                <p>Nikmati suasana perpustakaan ini...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="{{url('/img/hd2.png')}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>Tersedia berbagai macam jenis buku</h2>
                                <p>Nikmati suasana perpustakaan ini...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="{{url('/img/hd3.png')}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2 style="color: #;">Dan tersedia tempat yang nyaman untuk membaca</h2>
                                <p>Nimati suasana perpustakaan ini...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Rekomendasi untuk anda</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{url('/img/bukudesain.jpg')}}">
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-heart"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Ilmu</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="{{url('bukudesain')}}">Kitab Desain Grafis dengan CorelDraw 2019</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{url('img/bukuhome.jpg')}}">
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-heart"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="{{url('bukuhome')}}">Home sweet loan</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{url('/img/bukukisahnabi.jpg')}}">
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-heart"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="{{url('bukukisahnabi')}}">Kisah Nabi Muhammad SAW Shallallahu `alaihi Wa Sallam</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{url('/img/bukulayangan.jpg')}}">
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-heart"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="{{url('bukulayangan')}}">Layangan putus</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{url('/img/bukuphp.jpg')}}">
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-heart"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="{{url('bukuphp')}}">PHP 7 MYSQL</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{url('/img/bukuulama.jpg')}}">
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-heart"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="{{url('bukuulama')}}">Ulama Kritis Berjejak Manis</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Tranding</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Semuanya</li>
                                <li data-filter=".week">Ilmu</li>
                                <li data-filter=".month">Novel</li>
                                <li data-filter=".years">Islami</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix years"
                                data-setbg="{{url('/img/bukukisahnabi.jpg')}}">
                                <div class="view"><i class="fa fa-heart"></i> 9141</div>
                                <h5><a href="{{url('bukukisahnabi')}}">Kisah Nabi Muhammad SAW Shallallahu `alaihi Wa Sallam</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month years"
                            data-setbg="{{url('/img/bukulayangan.jpg')}}">
                            <div class="view"><i class="fa fa-heart"></i> 9141</div>
                            <h5><a href="{{url('bukulayangan')}}">Layangan putus</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years"
                        data-setbg="{{url('/img/bukuulama.jpg')}}">
                        <div class="view"><i class="fa fa-heart"></i> 9141</div>
                        <h5><a href="{{url('bukuulama')}}">Ulama Kritis Berjejak Manis</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix week"
                    data-setbg="{{url('/img/bukudesain.jpg')}}">
                    <div class="view"><i class="fa fa-heart"></i> 9141</div>
                    <h5><a href="{{url('bukudesain')}}">Kitab Desain Grafis dengan CorelDraw 2019</a></h5>
                    </div>
                <div class="product__sidebar__view__item set-bg mix month"
                data-setbg="{{url('/img/bukuhome.jpg')}}">
                <div class="view"><i class="fa fa-heart"></i> 9141</div>
                <h5><a href="{{url('bukuhome')}}">Home sweet loan</a></h5>
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
@endsection