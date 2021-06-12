@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container-notifikasi position-relative">
        <div class="home-kategori">
            <span class="status-pesanan">
                 STATUS PEMBAYARAN : PEMBAYARAN BERHASIL 
            </span>
            <div class="bg-status">
                <div class="status-paket">
                    <span>ID PESANAN : ID12345678</span>
                </div>
                <div class="ket-status" style="color: #514E4F;">
                    <span>Total : Rp 742.000,oo</span>
                </div>
                <div class="ket-status" style="color: #514E4F;">
                    <span>Metode Pembayaran : Virtual Account BCA</span>
                </div>
                <button class="btn-lihat-pesanan" style="margin-top: 10px;"> 
                    <a href="/detailpesanan">Lihat Detail Pesanan</a>
                </button>
            </div>
        </div>
    </div>
</section>
@endsection
