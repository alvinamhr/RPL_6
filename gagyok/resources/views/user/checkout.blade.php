@extends('layouts.navver2')

@section('content')
<section class="section">
    <div class="container-alamat-co position-relative">
        <div class="alamat-pengiriman-co">
            <span>ALAMAT PENGIRIMAN</span>
        </div>
        <div class="box-alamat-co">
            <span class="text-tempat-co">Rumah</span>
        </div>
        <div class="text-alamat-co"> 
            <p>Feliany</p>
            <p>081283940039</p>
            <p>Jalan Dharma Puri 6 Blok F6 no. 43A</p>
            <p>KOTA JAKARTA BARAT, KALIDERES, DKI JAKARTA, ID, 11850</p>
        </div>
        <button class="btn-pilih-co">
            PILIH ALAMAT LAIN
        </button>
        <div class="line-co"></div>
    </div>
</section>
<section class="section">
    <div class="container-cart2 position-relative" style="margin-top:-21%">
        <div class="header-cart">
            <div class="row gx-3 gy-2 align-items-center">
                <div class="col-sm-4">
                    <div class="header-text-cart" style="text-align:left">
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
        <div class="row-cart2">
            <div class="row gx-3 gy-2 align-items-center">
                <div class="col-sm-4">
                    <div class="form-check header-text-cart" style="text-align:left">
                        <div class="box-product-cart">
                            <img src="{{ asset('assets/image/Beranda/Hiburan/1.k-pop.png') }}" width="210px" height="170px" alt="make up">
                            <span class="merk-kategori merk-cart">CLIO</span>
                            <span class="nama-produk produk-cart">Prism Air Shadow Sparkling</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-harga-cart">
                        <span>IDR HARGA SATUAN</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="header-text-cart">
                        <div class="number-input">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="text-harga-cart">
                        <span>IDR TOTAL HARGA</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="pilih-pengiriman">
            <span>PILIH PENGIRIMAN</span>
        </div>
        <div class="pilih-pengiriman-co">
            <div class="row">
                <div class="col">
                    <div class="form-check total-harga-cart" style="font-weight: bold">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Reguler (3-5 hari)
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="total-harga-cart" style="font-weight: bold">
                        <span>IDR 10,000</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="pilih-pengiriman-co" style="margin-top: 590px">
            <div class="row">
                <div class="col">
                    <div class="form-check total-harga-cart" style="font-weight: bold">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Reguler (3-5 hari)
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="total-harga-cart" style="font-weight: bold">
                        <span>IDR 10,000</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ringkasan-belanja-co">
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
                        <span>IDR Harga</span>
                    </div>
                    <div class="biaya-pengiriman-co" style="font-weight: bold" >
                        <span>IDR Biaya Pengiriman</span>
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
                        <span>IDR 742,000</span>
                    </div>
                    <button type="button" href="#" class="btn-pilih-pembayaran ringkasan-text-cart" style="color:#fffff">
                        Pilih Pembayaran
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection