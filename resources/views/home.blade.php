@extends("link")

@section("content")
<body>
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="{{url('images/prot1.png')}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>Hallo, Selamat Datang..</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="{{url('#')}}"><span>Watch Now</span> <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="{{url('/images/prot2.png')}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="{{url('#')}}"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="{{url('/images/prot3.png')}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="{{url('#')}}"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
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
                                <li class="active" data-filter="*">Religius</li>
                                <li data-filter=".week">Ilmu</li>
                                <li data-filter=".month">Novel</li>
                                <li data-filter=".years">Manga</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="{{url('/img/hukum1.jpg')}}">
                                <div class="view"><i class="fa fa-heart"></i> 9141</div>
                                <h5><a href="{{url('#')}}">Boruto: Naruto next generations</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                            data-setbg="{{url('/img/hukum2.jpg')}}">
                            <div class="view"><i class="fa fa-heart"></i> 9141</div>
                            <h5><a href="{{url('#')}}">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years"
                        data-setbg="{{url('/img/manajemen1.jpg')}}">
                        <div class="view"><i class="fa fa-heart"></i> 9141</div>
                        <h5><a href="{{url('#')}}">Sword art online alicization war of underworld</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix years month"
                    data-setbg="{{url('/img/manajemen2.jpg')}}">
                    <div class="view"><i class="fa fa-heart"></i> 9141</div>
                    <h5><a href="{{url('#')}}">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                    </div>
                <div class="product__sidebar__view__item set-bg mix day"
                data-setbg="{{url('/img/bukuhome.jpg')}}">
                <div class="view"><i class="fa fa-heart"></i> 9141</div>
                <h5><a href="{{url('#')}}">Fate stay night unlimited blade works</a></h5>
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