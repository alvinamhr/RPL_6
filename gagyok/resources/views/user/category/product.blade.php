@extends('layouts.app')

@section('css')
    <link href="{{ asset('assets/css/detail-produk.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')  
<section class="section">  
    <h4><a style="color: #6670AD"; href="{{ url('category')}}">Kategori</a></li> > <a style="color: #6670AD" href="{{ url('category') }}/{{ $product->product_category}}">{{ $product->product_category}}</a> > {{$product->product_name }}</h4>
    <div class="isi">
        <div class="container-detail">
            <div class="container-foto">
                <a href="#">
                    <img src="{{ url('assets/image/product') }}/{{ $product->product_image }}" width="250px" height="250px" alt="product">
                </a>
            </div>
            <div class="list">
                <ul class="detail">
                    <li class="nama-brand">{{$product->product_name}}</li>
                    <li class="nama-produk">{{$product->product_short_desc}}</li>
                    <li class="harga">IDR {{ number_format($product->product_price) }}</li>
                    <li class="shade">SHADES</li>
                    <div class="kumpulan-shades">
                        <li class="list2"><a href="#" class="link"><button class="button-shades"></button></a></li>
                        <li class="list2"><a href="#" class="link"><button class="button-shades"></button></a></li>
                        <li class="list2"><a href="#" class="link"><button class="button-shades"></button></a></li>
                        <li class="list2"><a href="#" class="link"><button class="button-shades"></button></a></li>
                    </div>
                    <div class="jumlah-belanjaan">
                       <li class="jumlah">Quantity</li>
                       <form method="post" action="{{ url('InsertCart') }}/{{ $product->product_id }}" >
                        @csrf
                        <div class="number-input button-add-less">
                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                            <input class="quantity" min="0" name="order_qty" type="number" required="">
                            <button type ="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
                    </div>
                    <div class="tambah">
                        <a href="#"><button type="submit" class="button-tambah">Tambah ke Keranjang</button></a>
                    </div>
                    </form>
                </ul>
            </div>  
        </div>
        <br>
        <br>
        
        <div class="deskripsi">
            <h5>DESKRIPSI PRODUK</h5>
            <div class="container-desc">
                <p class="isi-desc">{{ $product->product_long_desc }}</p>
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