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
    {{-- </div> --}}
{{-- </section>
<section class="section"> --}}
    <div class="container-cart2 position-absolute" style=" margin-top:-60px">
        <div class="pilih-pengiriman">
            <span>PILIH PENGIRIMAN</span>
        </div>
        <form action="{{ url('checkout')}}" method="post">
            @csrf
                <div class="pilih-pengiriman-co">
                    <div class="row">
                        <div class="col">
                            <div class="form-check total-harga-cart" style="font-weight: bold">
                                <input class="form-check-input" onclick="this.form.submit()" name="ongkir" type="radio" value="100000" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Flash (1-2 hari)
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
                                <input class="form-check-input" onclick="this.form.submit()" name="ongkir" type="radio" value="50000" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Expres (3-5 hari)
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="total-harga-cart" style="font-weight: bold">
                                <span>IDR 50,000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pilih-pengiriman-co" style="margin-top: 700px">
                    <div class="row">
                        <div class="col">
                            <div class="form-check total-harga-cart" style="font-weight: bold">
                                <input class="form-check-input" onclick="this.form.submit()" name="ongkir" type="radio" value="10000" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Normal (5-7 hari)
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
            </form>
        <div class="ringkasan-belanja-co" style="font-weight: bold; margin-top: 65%">
            <div class="row">
                <div class="col">
                    <div class="ringkasan-text-cart">
                        <span>Ringkasan Belanja</span>
                    </div>
                    <div class="total-harga-cart">
                        <span>Total Harga</span>
                    </div>
                    <div class="biaya-pengiriman-co">
                        <span>Biaya Pengiriman</span>
                    </div>
                </div>
                <div class="col">
                    <div class="total-harga-cart" style="font-weight: bold; margin-top: 5%">
                        <span>IDR {{number_format($orders->subtotal)}}</span>
                    </div>
                    <div class="biaya-pengiriman-co" style="font-weight: bold" >
                        <span>IDR {{number_format($request->ongkir)}}</span>
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
                    <form method="post" action="{{ url('/pesan') }}">
                        @csrf
                    <div class="ringkasan-text-cart">
                        <span>Rp.   {{number_format($jumlah)}} </span>
                    </div>
                    
                        <input type="hidden" name="id"  value="{{$orders->id}}">
                        <input type="hidden" name="totalBayar"  value="{{$jumlah}}">
                        <button type="submit" class="btn-pilih-pembayaran ringkasan-text-cart">Pesan</button>                         
                    
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>

</section>
<section class="section-footer">
</section>

@endsection
<script>
    $('input[type=radio]').click(function() {
    $("form id or class").submit();
});
</script>