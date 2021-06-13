<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gagyok</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Gagyok" />
        <meta name="keywords" content="korean, online shop, korea, k-pop" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/image/favicon.png') }}">

        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
        <!-- END: Vendor CSS-->

        @yield('css')

        <!-- Main Css -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/slider.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/colors/default.css') }}" rel="stylesheet">

    </head>

    <body>        
        <!-- Navbar STart -->
        <div class="topnav fixed-top bg-white shadow" id="myTopnav">
            <div class="row">
                <div class="col">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/image/logo.png') }}" width="300" height="176" alt="Gagyok">
                    </a>
                </div>
                <div class="col">
                    <div class="row"> 
                        <div class="col">
                            <a href="/" class="active nav-links">BERANDA</a>
                        </div>
                        <div class="col">
                            <a href="category">KATEGORI</a>
                        </div>
                        <div class="col">
                            <a href="entertainment">HIBURAN</a>
                        </div>
                        <div class="col-auto">
                            <a href="/login"><span>Login or SignUp</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Slider -->
        <section class="half-slider position-relative">
            <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner align-items-center bg-slider">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/image/Beranda/slider.png') }}" class="img-slider" alt="...">
                        <h1 class="title-slider">TERBARU</h1>
                        <img src="{{ asset('assets/image/Beranda/sliderkecil.png') }}" class="img2-slider" alt="...">
                        <h2 class="capt-slider">3CE SOFT MATTE LIPSTICK #CHILL MOVE</h2>
                        <a href="category"><button type="button" class="btn-slider">KLIK DI SINI</button></a>
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('assets/image/Beranda/Kategori/1.makeup.png') }}" class="img-slider" alt="...">
                        <h1 class="title-slider">TERBARU</h1>
                        <img src="{{ asset('assets/image/Beranda/sliderkecil.png') }}" class="img2-slider" alt="...">
                        <h2 class="capt-slider">Prism Air Shadow Sparkling</h2>
                        <a href="category"><button type="button" class="btn-slider">KLIK DI SINI</button></a>
                    </div>
                </div>
                <button class="carousel-control-prev" role="button" href="#carouselControls" data-bs-slide="prev">
                    <img src="{{ asset('assets/icons/previous.jpg') }}" class="control">
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" role="button" href="#carouselControls" data-bs-slide="next">
                <img src="{{ asset('assets/icons/next.jpg') }}" class="control">
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="section">
            <div class="container-catalog position-relative">
                <div class="home-kategori">
                    <span class="text-section">KATEGORI</span>
                    <div class="row row-cols-3">
                            <div class="container-catalog">
                                <div class="col">
                                    <div class="align-items-center bg-home">
                                        <a href="category"><img src="{{ asset('assets/image/Beranda/Kategori/1.makeup.png') }}" width="300px" height="300px" alt="..."></a>
                                        <button type="button" class="caption-home">make up</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="align-items-center bg-home" style="margin-left:3.5%">
                                        <a href="category"><img src="{{ asset('assets/image/Beranda/Kategori/2.skincare.png') }}" width="300px" height="300px" alt="..."></a>
                                        <button type="button" class="caption-home">skincare</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="align-items-center bg-home" style="margin-left:7%">
                                        <a href="category"><img src="{{ asset('assets/image/Beranda/Kategori/3.mode.png') }}" width="300px" height="300px" alt="..."></a>
                                       <button type="button" class="caption-home">mode</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container-catalog">
                                <div class="col">
                                    <div class="align-items-center bg-home">
                                        <a href="category"><img src="{{ asset('assets/image/Beranda/Kategori/4.elektronik.png') }}" width="300px" height="300px" alt="..."></a>
                                        <button type="button" class="caption-home">elektronik</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="align-items-center bg-home" style="margin-left:3.5%">
                                        <a href="category"><img src="{{ asset('assets/image/Beranda/Kategori/5.makanan.png') }}" width="300px" height="300px" alt="..."></a>
                                        <button type="button" class="caption-home">makanan</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="align-items-center bg-home" style="margin-left:7%">
                                        <a href="category"><img src="{{ asset('assets/image/Beranda/Kategori/6.koleksipenggemar.png') }}" width="300px" height="300px" alt="..."></a>
                                        <button type="button" class="caption-home">koleksi penggemar</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container-catalog position-relative">
                <div class="home-hiburan">
                    <span class="text-section">HIBURAN</span>
                    <div class="row row-cols-3">
                        <div class="container-catalog">
                            <div class="col">
                                <div class="align-items-center bg-home">
                                    <a href="category"><img src="{{ asset('assets/image/Beranda/Hiburan/1.k-pop.png') }}" width="300px" height="300px" alt="..."></a>
                                    <button type="button" class="caption-home">k-pop</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="align-items-center bg-home" style="margin-left:3.5%">
                                    <a href="category"><img src="{{ asset('assets/image/Beranda/Hiburan/2.k-drama.png') }}" width="300px" height="300px" alt="..."></a>
                                    <button type="button" class="caption-home">k-drama</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="align-items-center bg-home" style="margin-left:7%">
                                    <a href="category"><img src="{{ asset('assets/image/Beranda/Hiburan/3.k-food.png') }}" width="300px" height="300px" alt="..."></a>
                                    <button type="button" class="caption-home">k-food</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Start -->
        <footer class="footer-distributed">
			<div class="footer-left">
                <p class="gagyok">GAGYOK</p>
                <h3>TENTANG GAGYOK</h3>
			</div>
			<div class="footer-right">
                <div>
                    <p class="footer-company-name">© Copyright Gagyok 2021. Developed by Victory.</p>
				</div>
			</div>
		</footer>

        <!-- javascript -->
        <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/scrollspy.min.js') }}"></script>
        <!-- Animation Js -->
        <script src="{{ asset('js/aos.js') }}"></script>

        @yield('script')

        <!-- Main Js -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery.js') }}"></script>
            <script src="{{ asset('js/plugins.js') }}"></script>
    </body>
</html>
