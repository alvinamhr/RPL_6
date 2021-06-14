@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container-alamat-co position-relative">
        {{-- Kondisi pesanan -> $status --}}
                    {{-- 1 = paket menunggu pembayaran --}}
                    {{-- 2 = paket sedang dikemas --}}
                    {{-- 3 = paket sedang dalam perjalanan --}}
                    {{-- 4 = paket telah diterima --}}
            @if ($order->status == 1)
                <div class="status"> 
                    <span > STATUS PEMBAYARAN : MENUNGGU PEMBAYARAN </span>
                </div>
            @elseif($order->status == 2)
                <div class="status" style="background-color: #ffc107;"> 
                    <span > STATUS PESANAN : SEDANG DIKEMAS </span>
                </div>
            @elseif($order->status == 3)
                <div class="status" style="background-color: #17A2b8;"> 
                    <span > STATUS PESANAN : DALAM PERJALANAN </span>
                </div>
            @elseif($order->status == 4)
                <div class="status" style="background-color: #41CC66;"> 
                    <span > STATUS PESANAN : BERHASIL DIKIRIMKAN </span>
                </div>
            @endif
    
        <div class="alamat-pengiriman-co" style="margin-top: 50px;">
            <p>ID PESANAN: {{$order->id}}</p>
            <p>ALAMAT PENGIRIMAN</p>
        </div>
        <div class="box-alamat-dp" style="margin-top: 130px;">
            <span class="text-tempat-co">Rumah</span>
            <div class="text-alamat-dp"> 
                <p>{{Auth::user()->name}}</p>
                <p>{{$profile->phone_number}}</p>
                <p>{{$profile->user_address}}</p>
                <p>Kota {{$profile->user_disctrict}}, Kabupaten {{$profile->user_city}},Provinsi {{$profile->user_province}}</p>
            </div>
        </div>
        <div class="line-co" style="margin-top: 380px;"></div>
        @if ($order->status == 1)
            <div class="box-alamat-dp" style="margin-top: 400px; height: 30%">
                <span class="text-tempat-co">Silahkan Melakukan Pembayaran Pada No Rekening 095038129 (BNI) a.n Gagyok Company </span>
                <div class="text-alamat-dp"> 
                    <p>*pembayaran anda akan dicek otomatis oleh sistem kami</p>
                </div>
            </div>
        @endif
    </div>
</section>
<section class="section">
        @php
                $count=0;
        @endphp
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
            @foreach($order_details as $order_detail)
            @php
                $count++;
            @endphp
            <div class="row gx-3 gy-2 align-items-center row-detailPesanan">
                <div class="col-sm-4">
                    <div class="form-check header-text-cart justify-content-center">
                        <div class="box-product-cart">
                            <a href="/produk/{{$order_detail->product_id}}"><img src="{{ url('assets/image/product') }}/{{ $order_detail->product->product_image }}" width="210px" height="170px" alt="..."></a>
                            <span class="merk-kategori merk-cart">{{ $order_detail->product->product_name }}</span>
                            <span class="nama-produk produk-cart">{{ $order_detail->product->product_short_desc }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-harga-cart">
                        <span>IDR {{ number_format($order_detail->product->product_price) }}</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="header-text-cart">
                        <span>{{$order_detail->qty}}</span>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="text-harga-cart">
                        <span>IDR {{ number_format($order_detail->price) }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
<section>
    <div>
        <div class="ringkasan-belanja-dp">
            <div class="row">
                <div class="col">
                    <div class="ringkasan-text-cart">
                        <span>Ringkasan Belanja</span>
                    </div>
                    <div class="total-harga-cart">
                        <span>Total Harga ({{$count}} produk)</span>
                    </div>
                    <div class="biaya-pengiriman-co">
                        <span>Biaya Pengiriman</span>
                    </div>
                </div>
                <div class="col">
                    <div class="total-harga-cart" style="font-weight: bold; margin-top: 5%">
                        <span>IDR {{ number_format($order->subtotal) }}</span>
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
                        <span>IDR  {{ number_format($order->subtotal) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection