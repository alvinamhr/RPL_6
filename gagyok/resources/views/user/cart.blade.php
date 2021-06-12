@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container-cart">
        <div class="header-cart">
            <div class="row gx-3 gy-2 align-items-center">
                <div class="col-sm-4">
                    <div class="form-check header-text-cart" style="text-align:left">
                        <input class="form-check-input" type="checkbox" value="" id="select-all">
                        <label class="form-check-label" for="flexCheckDefault">
                            PRODUK
                        </label>
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

        @php
                $count=0;
        @endphp
        @foreach($order_details as $order_detail)
        <div class="row-cart">
            @php
                $count++;
            @endphp
            <div class="row gx-3 gy-2 align-items-center">
                <div class="col-sm-4">
                    <div class="form-check header-text-cart" style="text-align:left">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label box-product-cart" for="flexCheckDefault">
                            <img src="{{ url('assets/image/product') }}/{{ $order_detail->product->product_image }}" width="210px" height="170px" alt="make up">
                            <span class="merk-kategori merk-cart">{{ $order_detail->product->product_name }}</span>
                            <span class="nama-produk produk-cart">{{ $order_detail->product->product_short_desc }}</span>
                        </label>
                            <form action="{{ url('cart')}}/{{$order_detail->id}}" method="post">
                                @csrf
                                <button type="submit" class="btn-hapus-cart" onclick="return confirm('Anda yakin akan menghapus data ?');">HAPUS</button>
                            </form>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-harga-cart">
                        <span>IDR {{ number_format($order_detail->product->product_price) }}</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="header-text-cart">
                        <div class="number-input">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                            <input class="quantity" min="0" name="quantity" value="{{ $order_detail->qty }}" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
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
        
        <div class="ringkasan-belanja-cart">
            <div class="row">
                <div class="col">
                    <div class="ringkasan-text-cart">
                        <span>Ringkasan Belanja</span>
                    </div>
                    <div class="total-harga-cart">
                        <span>Total Harga ({{$count}} produk)</span>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="total-harga-cart" style="font-weight: bold; margin-top: 10%">
                        <span>Total Harga : Rp. {{ number_format($orders->subtotal) }}</span>
                    </div>
                </div>
                <div class="col col-lg-2">
                    <a href="{{url('checkout')}}"> <button class="btn-checkout" >Checkout</button></a> 
                </div>
              </div>
        </div>
    </div>
</section>
@endsection
<script>
    $('#select-all').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;                       
        });
    }
});
</script>

