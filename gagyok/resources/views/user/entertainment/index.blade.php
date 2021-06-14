@extends('layouts.app')

@section('content')
    <!-- Make up Section -->
    <section class="section">
        <h1 class="best-seller"><a style="color: #6670AD; margin-left:100px; font-size:24px;" href="{{ url('home')}}">Home</a> > <a style="font-size:30px; "><u>Hiburan</u></a></a></h1>
        <div class="container-kategori">
        <div class="container-kategori">
            <div class="row">
                <div class="col-md-3">
                    <div class="bg-kategori">
                        <img src="{{ asset('assets/image/Beranda/hiburan/1.k-pop.png') }}" width="170px" height="170px" alt="make up">
                        <a class="section-title-kategori" href="/entertainment/{entertainment}">k-pop</a>
                    </div>
                </div>
                <div class="col-6 col-md-8">
                    <span class="best-seller" style="margin-left: 15%">TRENDING</span>
                    <div class="container-trending">
                        {{-- <span class="date">13 Agustus 2019</span> --}}
                        <span class="date" id="datetime"></span>
                        {{-- <script>
                        var dt = new Date(); 
                        document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"-"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"-"+ (dt.getFullYear());
                        </script> --}}
                        <div class="bg-hiburan">
                                <iframe class= "rounded"src="https://open.spotify.com/embed/playlist/6Rb4Ff5UQttjCAEN7qwXyR" width="100%" height="99%" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                        </div>
                        <span class="caption-trending" style="margin-top:340px;">K-POP HYPE PLAYLIST di Spotify! Mainkan Sekarang!</span>
                    </div>
                    <div class="container-trending">
                        <div class="bg-hiburan">
                            <a href="https://internasional.kontan.co.id/news/penggemar-kecewa-saat-bts-umumkan-konser-virtual-di-bulan-ramadhan"><img class="center-hiburan rounded" src="{{ asset('assets/image/hiburan/h1.jpg') }}" width="100%" height="99%" alt="make up"></a>
                        </div>
                        <span class="caption-trending">Penggemar kecewa saat BTS umumkan konser virtual di bulan Ramadhan</span>
                    </div>
                    <div class="container-trending">
                        <div class="bg-hiburan">
                            <a href="https://www.marieclaire.com/culture/a26895105/best-korean-dramas/"><img class="center-hiburan rounded" src="{{ url('assets/image/hiburan/h2.jpeg') }}" width="100%" height="99%" alt="make up"></a>
                        </div>
                        <span class="caption-trending">The 50 Best Korean Dramas to Get You Completely Hooked</span>
                    </div>

                    <div class="container-trending">
                        <div class="bg-hiburan">
                            <a href="https://wolipop.detik.com/entertainment-news/d-5375426/mr-queen-dan-10-drama-korea-dengan-rating-tertinggi-cetak-rekor?_ga=2.83442591.825254121.1618424762-1246019677.1615390131"><img class="center-hiburan rounded" src="{{ url('assets/image/Hiburan/h3.jpeg') }}" width="100%" height="99%" alt="make up"></a>
                        </div>
                        <span class="caption-trending">Mr Queen dan 10 Drama Korea dengan Rating Tertinggi, Cetak Rekor</span>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>

        <script>
            var dt = new Date(); 
            document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"-"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"-"+ (dt.getFullYear());
            </script>

    </section>
@endsection
