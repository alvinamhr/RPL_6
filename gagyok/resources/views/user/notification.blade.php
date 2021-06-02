@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container-notifikasi position-relative">
        <div class="home-kategori">
            <span class="status-pesanan">STATUS PESANAN</span>
            <div class="bg-notif">
                <div class="row">
                    <div class="col-auto">
                        <div class="box-notif">
                            <img src="{{ asset('assets/image/Beranda/sliderkecil.png') }}" style="width:200px; height:200px" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-9" style="margin-top: 60px">
                        <div class="status-paket">
                            <span>PAKET DITERIMA</span>
                        </div>
                        <div class="ket-status">
                            <span>Paket dengan ID12345678 telah diterima oleh pelanggan!</span>
                        </div>
                        <button class="btn-lihat-pesanan">
                            Lihat Pesanan
                        </button>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection
