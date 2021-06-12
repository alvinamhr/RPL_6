@extends('layouts.app')

@section('css')
    <link href="{{ asset('assets/css/detail-produk.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')  
<section class="section">  
    <h4>kategori > make up > nama produk</h4>
    <div class="isi">
        <div class="container-detail">
            <div class="container-foto">
                <a href="#">
                    <img src="#" width="250px" height="250px" alt="product">
                </a>
            </div>
            <div class="list">
                <ul class="detail">
                    <li class="nama-brand">NAMA BRAND</li>
                    <li class="nama-produk">Nama Produk</li>
                    <li class="harga">IDR xxxx</li>
                    <li class="shade">SHADES</li>
                    <div class="kumpulan-shades">
                        <li class="list2"><a href="#" class="link"><button class="button-shades"></button></a></li>
                        <li class="list2"><a href="#" class="link"><button class="button-shades"></button></a></li>
                        <li class="list2"><a href="#" class="link"><button class="button-shades"></button></a></li>
                        <li class="list2"><a href="#" class="link"><button class="button-shades"></button></a></li>
                    </div>
                    <div class="jumlah-belanjaan">
                       <li class="jumlah">Quantity</li>
                        <div class="number-input button-add-less">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                            <input class="quantity" min="0" name="quantity" value=" $order_detail->qty " type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
                    </div>
                    <div class="tambah">
                        <a href="#"><button class="button-tambah">Tambah ke Keranjang</button></a>
                    </div>
                </ul>
            </div>  
        </div>
        <br>
        <br>
        
        <div class="deskripsi">
            <h5>DESKRIPSI PRODUK</h5>
            <div class="container-desc">
                <p class="isi-desc">desc produknya</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

    <div class="bagian-bawah">
        <h5 class="serupa">SERUPA</h5>
        <div class="pembatas">
        </div>

        <div class="kumpulan-serupa">
            <button class="serupa1">
                <div class="konten">
                    <img src="24370-large_default.jpg" alt="foto" class="foto-produk-serupa">
                    <ul class="list-serupa">
                        <li class="serupa-nama-brand">HOLIKA HOLIKA</li>
                        <li class="serupa-nama-produk">Holi Pop Jelly Tint</li>
                        <li class="serupa-harga">IDR 88.000</li>
                    </ul>
                </div>
            </button>
            <button class="serupa2">
                <div class="konten">
                    <img src="24370-large_default.jpg" alt="foto" class="foto-produk-serupa">
                    <ul class="list-serupa">
                        <li class="serupa-nama-brand">HOLIKA HOLIKA</li>
                        <li class="serupa-nama-produk">Holi Pop Jelly Tint</li>
                        <li class="serupa-harga">IDR 88.000</li>
                    </ul>
                </div>
            </button>
            <button class="serupa3">
                <div class="konten">
                    <img src="24370-large_default.jpg" alt="foto" class="foto-produk-serupa">
                    <ul class="list-serupa">
                        <li class="serupa-nama-brand">HOLIKA HOLIKA</li>
                        <li class="serupa-nama-produk">Holi Pop Jelly Tint</li>
                        <li class="serupa-harga">IDR 88.000</li>
                    </ul>
                </div>
            </button>
            <button class="serupa4">
                <div class="konten">
                    <img src="24370-large_default.jpg" alt="foto" class="foto-produk-serupa">
                    <ul class="list-serupa">
                        <li class="serupa-nama-brand">HOLIKA HOLIKA</li>
                        <li class="serupa-nama-produk">Holi Pop Jelly Tint</li>
                        <li class="serupa-harga">IDR 88.000</li>
                    </ul>
                </div>
            </button>
            <button class="serupa5">
                <div class="konten">
                    <img src="24370-large_default.jpg" alt="foto" class="foto-produk-serupa">
                    <ul class="list-serupa">
                        <li class="serupa-nama-brand">HOLIKA HOLIKA</li>
                        <li class="serupa-nama-produk">Holi Pop Jelly Tint</li>
                        <li class="serupa-harga">IDR 88.000</li>
                    </ul>
                </div>
            </button>
        </div>
    </div>
</section>
@endsection