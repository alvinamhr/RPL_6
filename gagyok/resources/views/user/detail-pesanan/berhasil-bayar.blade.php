@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container-alamat-co position-relative">
        <div class="status" style="background-color: #41CC66;"> 
            <span href="/status0"> STATUS PEMBAYARAN : PEMBAYARAN BERHASIL </span>
        </div>
        <div class="alamat-pengiriman-co" style="margin-top: 50px;">
            <p>ID PESANAN: ID12345678</p>
            <p>ALAMAT PENGIRIMAN</p>
        </div>
        <div class="box-alamat-dp" style="margin-top: 130px;">
            <span class="text-tempat-co">Rumah</span>
            <div class="text-alamat-dp"> 
                <p>{{Auth::user()->name}}</p>
                <p>$profile->phone_number</p>
                <p>$profile->user_address</p>
                <p>Kota $profile->user_disctrict, Kabupaten $profile->user_city,Provinsi $profile->user_province</p>
            </div>
        </div>
        <div class="line-co" style="margin-top: 380px;"></div>
    </div>
</section>
<section class="section">
    <div class="container-dp position-relative" style="margin-top:-17%">
        <div class="header-dp">
            <div class="row gx-3 gy-2 align-items-center">
                <div class="col-sm-4">
                    <div class="header-text-cart">
                        <span>PRODUK</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="header-text-cart">
                        <span>HARGA SATUAN</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="header-text-cart">
                        <span>KUANTITAS</span>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-text-cart">
                        <span>TOTAL HARGA</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-dp">
            <div class="row gx-3 gy-2 align-items-center">
                <div class="col-sm-4">
                    <div class="form-check header-text-cart justify-content-center">
                        <div class="box-product-cart">
                            <img src="{{ asset('assets/image/Beranda/Hiburan/1.k-pop.png') }}" width="210px" height="170px" alt="make up">
                            <span class="merk-kategori merk-cart">CLIO</span>
                            <span class="nama-produk produk-cart">Prism Air Shadow Sparkling</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-harga-cart">
                        <span>IDR HARGA SAtuan</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="header-text-cart">
                        <span>10</span>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="text-harga-cart">
                        <span>IDR TOTAL HARGA</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ringkasan-belanja-dp">
            <div class="row">
                <div class="col">
                    <div class="ringkasan-text-cart">
                        <span>Ringkasan Belanja</span>
                    </div>
                    <div class="total-harga-cart">
                        <span>Total Harga (4 produk)</span>
                    </div>
                    <div class="biaya-pengiriman-co">
                        <span>Biaya Pengiriman</span>
                    </div>
                </div>
                <div class="col">
                    <div class="total-harga-cart" style="font-weight: bold; margin-top: 5%">
                        <span>IDR </span>
                    </div>
                    <div class="biaya-pengiriman-co" style="font-weight: bold" >
                        <span>IDR Biaya ne4Pengiriman</span>
                    </div>
                </div>
            </div>
            <div class="line-co" style="margin-top: 90px"></div>
            <div class="row" style="margin-top: 100px">
                <div class="col">
                    <div class="ringkasan-text-cart">
                        <span>Total Belanja</span>
                    </div>
                </div>
                <div class="col">
                    <div class="ringkasan-text-cart">
                        <span>IDR  </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection