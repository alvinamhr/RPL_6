@extends('layouts.app')

@section('content')
    <!-- Make up Section -->
    <section class="section">
        <div class="container-kategori">
            <div class="row">
                <div class="col-md-3">
                    <div class="bg-kategori">
                        <img src="{{ asset('assets/image/Beranda/Kategori/1.makeup.png') }}" width="170px" height="170px" alt="make up">
                        <a class="section-title-kategori" href="/category/{category}">make up</a>
                    </div>
                </div>
                <div class="col-6 col-md-8">
                    <span class="best-seller">BEST SELLER</span>
                    <div class="container-best-seller">
                        <div class="row-cols-3">
                                <div class="col">
                                    <div class="best-seller-box">
                                        <span class="merk-kategori">CLIO</span>
                                        <span class="nama-produk">Prism Air Shadow Sparkling</span>
                                        <span class="price">IDR 159,200</span>
                                        <img class="pic-product" src="{{ asset('assets/image/Beranda/Kategori/1.makeup/1.jpg') }}">
                                    <div>
                                </div>
                                <div class="col">
                                    <div class="best-seller-box" style="margin-left:55%">
                                        <span class="merk-kategori">CLIO</span>
                                        <span class="nama-produk">Prism Air Shadow Sparkling</span>
                                        <span class="price">IDR 159,200</span>
                                        <img class="pic-product" src="{{ asset('assets/image/Beranda/Kategori/1.makeup/1.jpg') }}">
                                    <div>
                                </div>
                                <div class="col">
                                    <div class="best-seller-box" style="margin-left: 55%">
                                        <span class="merk-kategori">CLIO</span>
                                        <span class="nama-produk">Prism Air Shadow Sparkling</span>
                                        <span class="price">IDR 159,200</span>
                                        <img class="pic-product" src="{{ asset('assets/image/Beranda/Kategori/1.makeup/1.jpg') }}">
                                    <div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>
    </section>
@endsection
