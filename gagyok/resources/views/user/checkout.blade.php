@extends('layouts.app')

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
            <p>{{Auth::user()->name}}</p>
            <p>{{$profile->phone_number}}</p>
            <p>{{$profile->user_address}}</p>
            <p>Kota {{$profile->user_disctrict}}, Kabupaten {{$profile->user_city}},Provinsi {{$profile->user_province}}</p>
        </div>
        <a class="btn-pilih-co" href="address/edit">
            PILIH ALAMAT LAIN
        </a>
        <div class="line-co"></div>
    </div>
</section>
<section class="section">
    <div class="container-cart2 position-relative" style=" margin-bottom:20px">
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
                        <span>IDR 100.000</span>
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
                        <span>IDR </span>
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
                        <span>Rp.   {{  number_format($orders->subtotal)}} </span>
                    </div>
                    <form method="post" action="{{ url('/pesan') }}">
                        @csrf
                        <input type="hidden" name="id"  value="{{$orders->id}}">
                        <button type="submit" class="btn-pilih-pembayaran ringkasan-text-cart">Pesan</button>                         
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-footer">
</section>
@endsection