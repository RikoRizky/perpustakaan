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
                        <span>Romance</span>
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
                        <div class="anime__details__pic set-bg" data-setbg="{{('assets/img/bukukisahnabi.jpg')}}">
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>Fate Stay Night: Unlimited Blade</h3>
                                <span>フェイト／ステイナイト, Feito／sutei naito</span>
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
                            <p>Every human inhabiting the world of Alcia is branded by a “Count” or a number written on
                                their body. For Hina’s mother, her total drops to 0 and she’s pulled into the Abyss,
                                never to be seen again. But her mother’s last words send Hina on a quest to find a
                            legendary hero from the Waste War - the fabled Ace!</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span> TV Series</li>
                                            <li><span>Studios:</span> Lerche</li>
                                            <li><span>Date aired:</span> Oct 02, 2019 to ?</li>
                                            <li><span>Status:</span> Airing</li>
                                            <li><span>Genre:</span> Action, Adventure, Fantasy, Magic</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Scores:</span> 7.31 / 1,515</li>
                                            <li><span>Rating:</span> 8.5 / 161 times</li>
                                            <li><span>Duration:</span> 24 min/ep</li>
                                            <li><span>Quality:</span> HD</li>
                                            <li><span>Views:</span> 131,541</li>
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