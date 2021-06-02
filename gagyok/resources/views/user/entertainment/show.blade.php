@extends('layouts.app')

@section('content')
    <!-- Make up Section -->
    <section class="section">
        <div class="container-kategori">
            <div class="row">
                <div class="col-md-3">
                    <div class="bg-kategori">
                        <img src="{{ asset('assets/image/Beranda/Hiburan/1.k-pop.png') }}" width="170px" height="170px" alt="make up">
                        <span class="section-title-kategori">k-pop</span>
                    </div>
                </div>
                <div class="col-6 col-md-8">
                    <span class="best-seller" style="margin-left: 15%">TRENDING</span>
                    <div class="container-trending">
                        <span class="date">13 Agustus 2019</span>
                        <div class="bg-hiburan">
                            <img src="{{ asset('assets/image/Beranda/Hiburan/1.k-pop.png') }}" width="100%" height="67%" alt="make up">
                        </div>
                        <span class="caption-trending">K-POP HYPE PLAYLIST di Spotify! Mainkan Sekarang!</span>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>
    </section>
@endsection
