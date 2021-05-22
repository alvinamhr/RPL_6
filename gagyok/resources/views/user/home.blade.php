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
                <h2 class="capt-slider">3CE SOFT MATTE LIPSTICK #CHILL MOVE</h2>
                <button type="button" class="btn-slider">KLIK DI SINI</button>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<div class="home-kategori">
    <span class="section text-section">KATEGORI</span>
    <div class="row row-cols-3">
            <div class="container-catalog">
                <div class="col">
                    <div class="align-items-center bg-home">
                        <img src="{{ asset('assets/image/Beranda/Kategori/1.makeup.png') }}" width="300px" height="300px" alt="...">
                        <button type="button" class="caption-home">make up</button>
                    </div>
                </div>
                <div class="col">
                    <div class="align-items-center bg-home" style="margin-left:5%">
                        <img src="{{ asset('assets/image/Beranda/Kategori/2.skincare.png') }}" width="300px" height="300px" alt="...">
                        <button type="button" class="caption-home">skincare</button>
                    </div>
                </div>
                <div class="col">
                    <div class="align-items-center bg-home" style="margin-left:10%">
                        <img src="{{ asset('assets/image/Beranda/Kategori/3.mode.png') }}" width="300px" height="300px" alt="...">
                        <button type="button" class="caption-home">mode</button>
                    </div>
                </div>
            </div>
            <div class="container-catalog">
                <div class="col">
                    <div class="align-items-center bg-home">
                        <img src="{{ asset('assets/image/Beranda/Kategori/4.elektronik.png') }}" width="300px" height="300px" alt="...">
                        <button type="button" class="caption-home">elektronik</button>
                    </div>
                </div>
                <div class="col">
                    <div class="align-items-center bg-home" style="margin-left:5%">
                        <img src="{{ asset('assets/image/Beranda/Kategori/5.makanan.png') }}" width="300px" height="300px" alt="...">
                        <button type="button" class="caption-home">makanan</button>
                    </div>
                </div>
                <div class="col">
                    <div class="align-items-center bg-home" style="margin-left:10%">
                        <img src="{{ asset('assets/image/Beranda/Kategori/6.koleksipenggemar.png') }}" width="300px" height="300px" alt="...">
                        <button type="button" class="caption-home">koleksi penggemar</button>
                    </div>
                </div>
            </div>
    </div>
</div>
<div class="home-hiburan">
    <span class="section text-section">HIBURAN</span>
    <div class="row row-cols-3">
        <div class="container-catalog">
            <div class="col">
                <div class="align-items-center bg-home">
                    <img src="{{ asset('assets/image/Beranda/Hiburan/1.k-pop.png') }}" width="300px" height="300px" alt="...">
                    <button type="button" class="caption-home">k-pop</button>
                </div>
            </div>
            <div class="col">
                <div class="align-items-center bg-home" style="margin-left:5%">
                    <img src="{{ asset('assets/image/Beranda/Hiburan/2.k-drama.png') }}" width="300px" height="300px" alt="...">
                    <button type="button" class="caption-home">k-drama</button>
                </div>
            </div>
            <div class="col">
                <div class="align-items-center bg-home" style="margin-left:10%">
                    <img src="{{ asset('assets/image/Beranda/Hiburan/3.k-food.png') }}" width="300px" height="300px" alt="...">
                    <button type="button" class="caption-home">k-food</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection