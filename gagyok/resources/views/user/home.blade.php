@extends('layouts.app')

@section('content')
<!-- Slider -->
<section class="half-slider position-relative">
    <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner align-items-center bg-slider">
            <div class="carousel-item active">
                <img src="{{ asset('assets/image/Beranda/slider.png') }}" class="img-slider" alt="...">
                <h1 class="title-slider">TERBARU</h1>
                <img src="{{ asset('assets/image/Beranda/sliderkecil.png') }}" class="img2-slider" alt="...">
                <h2 class="capt-slider">3CE SOFT MATTE LIPSTICK #CHILL MOVE</h2>
                <button type="button" class="btn-slider">KLIK DI SINI</button>
            </div>
            <div class="carousel-item">
            <img src="{{ asset('assets/image/Beranda/Kategori/1.makeup.png') }}" class="img-slider" alt="...">
                <h1 class="title-slider">TERBARU</h1>
                <img src="{{ asset('assets/image/Beranda/sliderkecil.png') }}" class="img2-slider" alt="...">
                <h2 class="capt-slider">Prism Air Shadow Sparkling</h2>
                <button type="button" class="btn-slider">KLIK DI SINI</button>
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
                                <img src="{{ asset('assets/image/Beranda/Kategori/1.makeup.png') }}" width="300px" height="300px" alt="...">
                                <a class="caption-home" href="#">make up</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="align-items-center bg-home" style="margin-left:3.5%">
                                <img src="{{ asset('assets/image/Beranda/Kategori/2.skincare.png') }}" width="300px" height="300px" alt="...">
                                <a class="caption-home" href="#">skincare</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="align-items-center bg-home" style="margin-left:7%">
                                <img src="{{ asset('assets/image/Beranda/Kategori/3.mode.png') }}" width="300px" height="300px" alt="...">
                                <a class="caption-home" href="#">mode</a>
                            </div>
                        </div>
                    </div>
                    <div class="container-catalog">
                        <div class="col">
                            <div class="align-items-center bg-home">
                                <img src="{{ asset('assets/image/Beranda/Kategori/4.elektronik.png') }}" width="300px" height="300px" alt="...">
                                <a class="caption-home" href="#">elektronik</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="align-items-center bg-home" style="margin-left:3.5%">
                                <img src="{{ asset('assets/image/Beranda/Kategori/5.makanan.png') }}" width="300px" height="300px" alt="...">
                                <a class="caption-home" href="#">makanan</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="align-items-center bg-home" style="margin-left:7%">
                                <img src="{{ asset('assets/image/Beranda/Kategori/6.koleksipenggemar.png') }}" width="300px" height="300px" alt="...">
                                <a class="caption-home" href="#">koleksi penggemar</a>
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
                            <img src="{{ asset('assets/image/Beranda/Hiburan/1.k-pop.png') }}" width="300px" height="300px" alt="...">
                            <a class="caption-home" href="#">k-pop</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="align-items-center bg-home" style="margin-left:3.5%">
                            <img src="{{ asset('assets/image/Beranda/Hiburan/2.k-drama.png') }}" width="300px" height="300px" alt="...">
                            <a class="caption-home" href="#">k-drama</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="align-items-center bg-home" style="margin-left:7%">
                            <img src="{{ asset('assets/image/Beranda/Hiburan/3.k-food.png') }}" width="300px" height="300px" alt="...">
                            <a class="caption-home" href="#">k-food</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
